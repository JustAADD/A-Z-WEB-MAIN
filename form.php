<?php

require_once './db-con/db.php';

if (isset($_GET['id'])) {

    $id = (int) $_GET['id'];

    $stmt = mysqli_prepare($con, "SELECT product_name, price FROM shop_items WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);


        $product_id = $id;
        $product_name = $row['product_name'];
        $price = $row['price'];
    } else {
        die("Product not found.");
    }
}

if (isset($_POST['submit'])) {

    $product_id = (int) $_POST['product_id'];

    $stmt = mysqli_prepare($con, "SELECT product_name, price FROM shop_items WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $product_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $product_name = $row['product_name'];
        $price        = $row['price'];
    } else {
        die("Product not found.");
    }

    $firstName = trim($_POST['first-name']);
    $lastName  = trim($_POST['last-name']);
    $name      = $firstName . ' ' . $lastName;
    $email     = trim($_POST['email']);
    $phone     = trim($_POST['phone']);
    $address   = trim($_POST['address']);
    $quantity  = trim($_POST['quantity']);
    $comments  = trim($_POST['comments']);

    $qr_upload = null;
    if (isset($_FILES['qr_upload']) && $_FILES['qr_upload']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . '/uploads/qr/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $ext = strtolower(pathinfo($_FILES['qr_upload']['name'], PATHINFO_EXTENSION));
        $allowedExt = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($ext, $allowedExt)) {
            $newFileName = 'qr_' . time() . '_' . uniqid() . '.' . $ext;
            $targetPath  = $uploadDir . $newFileName;

            if (move_uploaded_file($_FILES['qr_upload']['tmp_name'], $targetPath)) {
                $qr_upload = 'uploads/qr/' . $newFileName; // relative path stored in DB
            }
        }
    }
    if ($qr_upload === null) {
        die("Error uploading QR code. Please try again.");
    }

    $stmt = mysqli_prepare($con, "INSERT INTO cus_orders (product_id, product_name, price, name, email, phone, address, quantity, comments, qr_upload) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "isdsssssss", $product_id, $product_name, $price, $name, $email, $phone, $address, $quantity, $comments, $qr_upload);
    mysqli_stmt_execute($stmt);

    $orderSuccess = true;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Z Peptides PH</title>
    <link rel="stylesheet" href="./src/output.css">
    <link rel="icon" type="image/png" href="./src/img/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>

    <div class="w-full h-auto mx-auto py-8 px-20 align-items-center justify-center">

        <!-- Success modal -->
        <div x-data="{ showSuccessModal: <?= $orderSuccess ? 'true' : 'false' ?> }"
            x-init="if (showSuccessModal) { setTimeout(() => window.location.href = 'shop.php', 3000) }">

            <div x-show="showSuccessModal" x-transition class="fixed inset-0 z-50 flex items-center justify-center p-4"
                style="display: none;">

                <div class="w-full h-40 max-w-md rounded-lg p-6 shadow-lg bg-green-50 border-green-200">

                    <div class="flex items-center gap-4 text-green-800">
                        <i class="fa-solid fa-circle-check text-lg"></i>
                        <h2 class="text-base font-semibold text-green-900">Order placed!</h2>
                    </div>

                    <p class="mt-2 text-sm text-gray-600 mb-2">
                        Thank you — your order has been submitted successfully. Redirecting...
                    </p>

                </div>
            </div>

        </div>

        <div x-data="{ showExitModal: false }">

            <!-- Back button (now opens confirmation instead of navigating directly) -->
            <a href="javascript:void(0)" @click="showExitModal = true"
                class="flex items-center justify-center w-25 h-10 rounded-md text-gray-500 hover:bg-gray-100 transition mb-5">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 8l-4 4m0 0l4 4m-4-4h18" />
                </svg>
                &nbsp; Back
            </a>

            <!-- Confirmation modal -->
            <div x-show="showExitModal" x-transition class="fixed inset-0 z-50 flex items-center justify-center p-4"
                style="display: none;">

                <div @click.outside="showExitModal = false"
                    class="w-full h-40 max-w-md rounded-lg p-6 shadow-lg bg-red-50  border-red-200">

                    <div class="flex items-center gap-4 text-red-800">
                        <i class="fa-solid fa-triangle-exclamation text-lg"></i>
                        <h2 class="text-base font-semibold text-red-900">Exit this form?</h2>
                    </div>

                    <p class="mt-2 text-sm text-gray-600 mb-2">
                        Are you sure you want to exit? Any unsaved changes will be lost.
                    </p>

                    <div class="mt-5 flex justify-end gap-3">
                        <button @click="showExitModal = false"
                            class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Cancel
                        </button>
                        <button onclick="history.back()"
                            class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Yes, Exit
                        </button>
                    </div>

                </div>
            </div>

        </div>


        <div class="flex flex-col md:flex-row justify-center items-center mb-1">
            <p class="font-poppins text-3xl font-semibold text-gray-800">
                INQUIRY FORM
            </p>
        </div>
        <div class="mb-18 flex flex-col md:flex-row justify-center items-center text-gray-600">
            <p class="font-poppins text-sm text-light font-normal">
                for inquiries, please input your contact info:
            </p>
        </div>



        <!-- form -->

        <div class="border-b border-white/10 pb-12 max-w-3xl mx-auto">

            <h2 class="text-base font-semibold leading-7 text-gray-900">Contact Information</h2>
            <p class=" text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>


            <h2 class="hidden"><?= htmlspecialchars($product_name) ?></h2>
            <p class="hidden">Price: <?= htmlspecialchars($price) ?></p>



            <form method="POST" action="form.php" enctype="multipart/form-data">

                <input type="hidden" name="product_id" value="<?= (int) $product_id ?>">
                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">

                        <div class="mt-1">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                placeholder="First name"
                                class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-[#515151] sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">

                        <div class="mt-1">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                placeholder="Last name"
                                class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#515151] sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">

                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" placeholder="Email address"
                                class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#515151] sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">

                        <div class="mt-1">
                            <input id="phone" name="phone" type="tel" autocomplete="tel" placeholder="Phone number"
                                class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#515151] sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <!-- permanent address -->

                    <div class="sm:col-span-3">
                        <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Permanent
                            address</label>
                        <div class="mt-2">
                            <input id="address" name="address" type="address" autocomplete="address"
                                placeholder="Permanent address"
                                class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#515151] sm:text-sm sm:leading-6">
                        </div>

                    </div>
                    <div class="sm:col-span-3">
                        <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Set
                            Quantity</label>
                        <div class="mt-2">
                            <input id="quantity" name="quantity" type="quantity" autocomplete="quantity"
                                placeholder="Quantity"
                                class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#515151] sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <!-- leave a comments -->
                    <div class="col-span-full">
                        <label for="comments" class="block text-sm font-medium leading-6 text-gray-900">Comments</label>
                        <div class="mt-2">
                            <textarea id="comments" name="comments" rows="3"
                                placeholder="Write your inquiries/notes here."
                                class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#515151] sm:text-sm sm:leading-6"></textarea>
                        </div>

                    </div>

                    <!-- qr -->
                    <div class="sm:col-span-3">

                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">QR Code</label>

                        <img src="./src/img/qrpayment.jpg" alt="qr" class="border border-gray-300 w-auto">

                        <p class="mt-3 text-sm leading-6 text-gray-600">Scan the QR code to pay via GCash or PayMaya.
                        </p>
                    </div>

                    <!-- upload file -->

                    <div class="sm:col-span-3 mx-auto">
                        <label for="file-upload" class="block text-sm font-medium leading-6 text-gray-900">Upload
                            File</label>
                        <div class="mt-2">
                            <input id="file-upload" name="qr_upload" type="file" accept="image/*"
                                class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-600 hover:bg-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#515151] sm:text-sm sm:leading-6">
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">• Upload your screenshot payment transactions
                            here.
                            <br>
                            • Be sure to check the amount before paying
                        </p>
                    </div>

                    <!-- submit button -->

                    <div class="col-span-full">
                        <button type="submit" name="submit"
                            class="rounded-md bg-[#313131] px-10 py-2 text-sm font-light text-white shadow-sm hover:bg-[#515151]">Submit</button>
                    </div>

                </div>
            </form>
        </div>

    </div>

    <?php
    include('footer.php');
    ?>

</body>

</html>