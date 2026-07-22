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


    <div class="w-full h-auto mx-auto py-20 px-20">
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-2">
            <div class="mx-auto items-center justify-center w-100 h-auto">
                <div class="image-container items-center justify-center shadow-md">
                    <img src="./src/img/prod-img/prod-drop2.jpg" alt="Image 1" class="object-cover">
                </div>
            </div>
            <div class="mx-auto w-full items-center justify-center p-10">
                <h2 class="text-lg font-semibold">Tachyplesin 30</h2>
                <p class="text-sm font-normal mb-3">₱1699.00</p>

                <p class="text-sm font-normal mb-10">Tachyplesins are natural, cationic β-hairpin antimicrobial peptides
                    (AMPs) originally isolated from the hemocytes (blood cells) of the horseshoe crab</p>


                <a href="./form.php"
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

    <?php
    include('footer.php');
    ?>
</body>

</html>