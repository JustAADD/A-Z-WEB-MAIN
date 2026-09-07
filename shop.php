<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Z Peptides PH</title>
    <link rel="icon" type="image/png" href="./src/img/favicon.ico" />
    <link rel="stylesheet" href="./src/output.css">
</head>

<body>

    <?php
    include('nav.php');
    ?>

    <sub header class="flex w-auto h-auto bg-[#025479] text-white">
        <div class="h-auto w-full flex flex-col justify-center items-center p-10 sm:px-10 md:p-15 lg:p-15 xl:p-15 text-white bg-no-repeat bg-cover bg-center"
            style="background-image: linear-gradient(rgba(2, 84, 121, 0.9), rgba(2, 84, 121, 0.7)), url('./src/img/DP1.jpg'); background-position: center 100%;">
            <div class="font-poppins font-light text-center text-2xl">
                Start your Peptides Inquiry Today!
            </div>
        </div>
    </sub>

    <div class="py-20">
        <div class="h-auto w-full  sm:px-10 md:px-15 lg:px-30 xl:px-30  pt-10">
            <div class="flex flex-col lg:flex-row justify-between items-center mb-2">
                <p class="font-poppins text-3xl font-semibold">
                    Products
                </p>
            </div>
            <div class="flex flex-col lg:flex-row justify-between items-center mb-8">
                <p class="font-poppins text-sm text-light font-normal">
                    5% OFF ON ALL PRODUCTS
                </p>
            </div>


        </div>

        <!-- shop starts here -->

        <div class="w-full flex justify-center items-center h-auto mx-auto">

            <div class="w-full flex justify-center items-center">
                <?php include('shop-items.php'); ?>
            </div>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>
</body>

</html>