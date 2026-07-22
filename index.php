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
        <div class="mb-4">
            <p class="font-poppins text-sm text-light font-normal text-gray-600">
                5% OFF ON ALL PRODUCTS
            </p>
        </div>

        <a href="./shop.php"
            class="flex border border-gray-300 rounded-md px-4 py-2 text-gray-500 w-48 items-center justify-center hover:bg-gray-100 transition mb-10">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>

            &nbsp; Product Lists &nbsp;
        </a>

        <!-- shop starts here -->

        <div class="w-full flex justify-center items-center max-w-5xl h-auto mx-auto">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="mx-auto items-center justify-center">
                    <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                        <img src="./src/img/prod-img/T15.jpg" alt="Image 1" class="object-cover h-72 w-56">
                    </div>
                    <div class="w-full mb-5 mt-3 font-poppins">
                        <h2 class="text-lg font-semibold">Tachyplesin 15</h2>
                        <p class="text-sm font-normal mb-3">₱1699.00</p>

                    </div>
                </div>

                <div class="mx-auto items-center justify-center">
                    <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                        <img src="./src/img/prod-img/T30.jpg" alt="Image 1" class="object-cover h-72 w-56">
                    </div>
                    <div class="w-full mb-5 mt-3 font-poppins">
                        <h2 class="text-lg font-semibold">Tachyplesin 30</h2>
                        <p class="text-sm font-normal mb-3">₱1899.00</p>

                    </div>
                </div>

                <div class="mx-auto items-center justify-center">
                    <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                        <img src="./src/img/prod-img/GHK100.jpg" alt="Image 1" class="object-cover h-72 w-56">
                    </div>
                    <div class="w-full mb-5 mt-3 font-poppins">
                        <h2 class="text-lg font-semibold">GHK 100</h2>
                        <p class="text-sm font-normal mb-3">₱1399.00</p>

                    </div>
                </div>

                <div class="mx-auto items-center justify-center">
                    <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                        <img src="./src/img/prod-img/KPV10.jpg" alt="Image 1" class="object-cover h-72 w-56">
                    </div>
                    <div class="w-full mb-5 mt-3 font-poppins">
                        <h2 class="text-lg font-semibold">KPV 10</h2>
                        <p class="text-sm font-normal mb-3">₱1399.00</p>

                    </div>
                </div>

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