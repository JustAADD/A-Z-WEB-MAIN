<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/main.css" rel="stylesheet">
    <link href="./src/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="shadow-xl">
        <div class="logo">
            <img src="./src/img/az-logo.png" alt="">
        </div>

        <ul id="menuList">
            <li class="font-poppins"><a href="./index.php">Home</a></li>
            <li class="font-poppins"><a href="./shop.php">Products</a></li>
            <li class="font-poppins"><a href="./contact.php">Contact</a></li>
            <li class="font-poppins"><a href="./about.php">About us</a></li>


            <li class="soc-links gap-1">
                <i class="fa-brands fa-tiktok me-1"></i>
                <i class="fa-brands fa-square-instagram"></i>
            </li>
        </ul>



        <div class="menu-icon">
            <i class="fa-solid fa-bars-staggered" onclick="toggleMenu()"></i>
        </div>
    </nav>


    <script>
        let menuList = document.getElementById("menuList");

        menuList.style.maxHeight = "0px";

        function toggleMenu() {
            const isClosed = menuList.style.maxHeight === "0px" || menuList.style.maxHeight === "";

            if (isClosed) {
                // OPEN
                menuList.style.maxHeight = "500px";
                menuList.style.padding = "0px 0";

            } else {
                // CLOSE
                menuList.style.maxHeight = "0px";
                menuList.style.padding = "0px";
            }
        }
    </script>

</body>

</html>