<?php

include('./db-con/db.php');

if (isset($_GET['id'])) {

    $id = (int)$_GET['id'];

    $sql = "SELECT * FROM shop_items WHERE id = $id";
    $result = mysqli_query($con, $sql);

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

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Z Peptides PH</title>
    <link href="./src/output.css" rel="stylesheet">
</head>

<body>

    <?php
    include('nav.php');
    ?>

    <form method="POST" action="">
        <div class="w-full h-auto mx-auto py-20 px-20">

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
                        <img src="./src/img/prod-img/prod-drop2.jpg" alt="Image 1" class="object-cover">
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


                    <a href="./form.php" name="order_now"
                        class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        &nbsp; Order now &nbsp;
                    </a>
                </div>
            </div>
        </div>
    </form>

    <?php
    include('footer.php');
    ?>
</body>

</html>