<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/main.css" rel="stylesheet">
    <link href="./src/output.css" rel="stylesheet">
</head>

<body>
    <nav class="shadow-md">
        <div class="logo">
            <img src="./src/img/az-logo.png" alt="">
        </div>

        <ul id="menuList">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./shop.php">Shop</a></li>
            <li><a href="./contact.php">Contact</a></li>
        </ul>

        <div class="soc-links">
            <i class="fa-brands fa-square-facebook"></i>
            <i class="fa-brands fa-shopify"></i>
        </div>
        <div class="menu-icon">
            <i class="fa-solid fa-bars-staggered" onclick="toggleMenu()"></i>
        </div>
    </nav>


    <script>
        let menuList = document.getElementById("menuList")
        menuList.style.maxHeight = "0px";

        function toggleMenu() {
            if (menuList.style.maxHeight === "0px" || menuList.style.maxHeight === "") {
                // OPEN
                menuList.style.marginTop = "0px";
                menuList.style.maxHeight = "500px";
                menuList.style.padding = "0px 0";
            } else {
                // CLOSE
                menuList.style.marginTop = "0px";
                menuList.style.maxHeight = "0px";
                menuList.style.padding = "0px";
            }
        }
    </script>



</body>

</html>