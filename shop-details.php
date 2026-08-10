<?php

include('./db-con/db.php');

if (isset($_GET['id'])) {

    $id = (int) $_GET['id'];

    $stmt = mysqli_prepare($con, "SELECT product_name, price, description FROM shop_items WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $product_name = $row['product_name'];
        $price = $row['price'];
        $description = $row['description'];
    } else {
        die("Product not found.");
    }
} else {
    die("No product selected.");
}

if (isset($_POST['submit'])) {
    $id = (int) $_POST['product_id']; // or $_POST['product_id'] if you switch to hidden input

    $stmt = mysqli_prepare($con, "SELECT id FROM shop_items WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        header('location: form.php?id=' . $id);
        exit;
    } else {
        die("Product not found.");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Z Peptides PH</title>
    <link rel="stylesheet" href="./src/output.css">
</head>

<body>

    <?php
    include('nav.php');
    ?>

    <form method="POST" action="shop-details.php?id=<?= (int) $id ?>">
        <div class="w-full h-auto align-items-center justify-center mx-auto py-20 px-20">

            <a href="javascript:history.back()"
                class="flex items-center justify-center w-25 h-10 rounded-md text-gray-500 hover:bg-gray-100 transition mb-5">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 8l-4 4m0 0l4 4m-4-4h18" />
                </svg>
                &nbsp; Back
            </a>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-2">
                <div class="mx-auto items-center justify-center w-100 h-auto">
                    <div class="image-container items-center justify-center shadow-md">
                        <img src="image.php?id=<?= (int)$id ?>" alt="<?= htmlspecialchars($product_name) ?>"
                            class="object-cover">
                    </div>
                </div>
                <div class="mx-auto w-full items-center justify-center p-10">
                    <h2 class="text-lg font-semibold">
                        <?php echo htmlspecialchars($product_name); ?>
                    </h2>
                    <p class="text-sm font-normal mb-3">
                        ₱<?php echo number_format($price, 2); ?>
                    </p>

                    <p class="text-sm font-normal mb-10">
                        <?php echo nl2br(htmlspecialchars($description)); ?>
                    </p>


                    <input type="hidden" name="product_id" value="<?= (int) $id ?>">

                    <button type="submit" name="submit" class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border
                border-gray-300 hover:bg-gray-100 transition">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>

                        &nbsp; Proceed to form &nbsp;
                    </button>
                </div>
            </div>
        </div>
    </form>

    <!-- SUB FOOTER -->

    <div class="text-center text-sm text-gray-500 ">
        <div class="flex justify-center items-center soc-links gap-1 mb-4">
            <i class="fa-brands fa-tiktok me-1"></i>
            <i class="fa-brands fa-square-instagram"></i>
        </div>
        © 2026 AZ-PH PEPTIDES
    </div>
</body>

</html>