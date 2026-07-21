<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Z Peptides PH</title>
    <link href="./output.css" rel="stylesheet">
</head>

<body>

    <?php
    include('nav.php');

    ?>

    <div class="h-150 w-full flex flex-col justify-center items-center p-10 sm:px-10 md:p-15 lg:p-15 xl:p-20 text-white bg-no-repeat bg-cover bg-center"
        style="background-image: linear-gradient(rgba(2, 84, 121, 0.9), rgba(2, 84, 121, 0.7)), url('./src/img/DP1.jpg'); background-position: center 100%;">

        <div class="text-center max-w-3xl">
            <h1 class="font-poppins font-medium text-4xl sm:text-3xl md:text-4xl mb-3 ">
                Your Trusted Source For High-Quality Peptides
            </h1>

            <p class="font-poppins font-light sm:text-lg md:text-lg lg:text-xl xl:text-2xl mb-10">
                Direct-to-Consumer | Reliable | Source with Care
            </p>

            <a href="./shop.php"
                class="rounded-full bg-[#262626] text-white px-10 py-2 font-open-sans button-hover inline-block text-center hover:bg-[#141414]">
                Inquire Now
            </a>
        </div>
    </div>

    <div class="h-full w-full mx-auto px-30 py-20">
        <div class="flex flex-col md:flex-row justify-between items-center mb-2">
            <p class="font-poppins text-3xl font-semibold">
                Our Exclusive Products
            </p>
        </div>
        <div class="mb-8">
            <p class="font-poppins text-sm text-light font-normal text-gray-600">
                5% OFF ON ALL PRODUCTS
            </p>
        </div>

        <!-- shop starts here -->

        <div class="w-full flex justify-center items-center max-w-5xl h-auto mx-auto">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php include('shop-items.php'); ?>
            </div>
        </div>
    </div>

    <div class="h-full w-full mx-auto px-30 py-20">
        <div class="flex flex-col md:flex-row justify-between items-center mb-2">
            <p class="font-poppins text-3xl font-semibold">
                Customer Feedback
            </p>
        </div>
        <div class=" mb-8">
            <p class="font-poppins text-sm text-light font-normal text-gray-600">
                Deliver consistent customer satisfaction
            </p>
        </div>

        <div class="w-full flex justify-center items-center h-auto mx-auto">

            <?php include('feedbacks.php'); ?>

        </div>
    </div>


    <?php
    include('footer.php');

    ?>
</body>

</html>