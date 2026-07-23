<?php
include('./db-con/db.php');

session_start();

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


    <form method="POST" action="" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/T15.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">Tachyplesin 15</h2>
                <p class="text-sm font-normal mb-2">₱1,699.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • TIRZ Complete set with kits </p>
                <a href="" class=" flex items-center justify-center w-full h-10 rounded-md text-gray-500 border
                    border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/T30.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">Tachyplesin 30</h2>
                <p class="text-sm font-normal mb-2">₱1,899.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • TIRZ Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/GHK100.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">Tachyplesin 60</h2>
                <p class="text-sm font-normal mb-2">₱2,299.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • TIRZ Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/KPV10.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">GHK 50</h2>
                <p class="text-sm font-normal mb-2">₱1,199.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • Pepies Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>

        <!-- column 2 -->

        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/GTT1500 FUANG.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">GHK 100</h2>
                <p class="text-sm font-normal mb-2">₱1,399.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • Pepies Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/T15.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">KPV 10</h2>
                <p class="text-sm font-normal mb-2">₱1,599.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • Pepies Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/T30.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">GTT1500 FUANG</h2>
                <p class="text-sm font-normal mb-2">₱1,599.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • Pepies Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/GHK100.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">MOTSC20</h2>
                <p class="text-sm font-normal mb-2">₱1,899.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • Pepies Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
        <!-- column 3 -->

        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/GHK100.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">SS31</h2>
                <p class="text-sm font-normal mb-2">₱1,499.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • Pepies Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/GHK100.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">NAD+</h2>
                <p class="text-sm font-normal mb-2">₱1,499.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • Pepies Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/GHK100.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">CAGRI</h2>
                <p class="text-sm font-normal mb-2">₱1,899.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • Pepies Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/GHK100.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">TESA 10</h2>
                <p class="text-sm font-normal mb-2">₱2,599.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • Pepies Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>

        <!-- column 5 -->

        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/GHK100.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">RETA 10</h2>
                <p class="text-sm font-normal mb-2">₱1,899.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • Pepies Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/GHK100.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">RETA 15</h2>
                <p class="text-sm font-normal mb-2">₱2,199.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • Pepies Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
        <div class="mx-auto items-center justify-center">
            <div class="image-container h-80 w-60 flex items-center justify-center shadow-md">
                <img src="./src/img/prod-img/GHK100.jpg" alt="Image 1" class="object-cover h-72 w-56">
            </div>
            <div class="w-full mb-5 mt-3 font-poppins">
                <h2 class="text-lg font-semibold">RETA 30</h2>
                <p class="text-sm font-normal mb-2">₱2,599.00</p>
                <p class="text-sm font-light text-gray-800 mb-3">
                    • Pepies Complete set with kits </p>
                <a href="./shop-details.php"
                    class="flex items-center justify-center w-full h-10 rounded-md text-gray-500 border border-gray-300 hover:bg-gray-100 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    &nbsp; See details &nbsp;
                </a>
            </div>
        </div>
    </form>

</body>

</html>