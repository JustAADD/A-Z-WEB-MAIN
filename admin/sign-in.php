<?php

require 'C:\xampp\htdocs\az-web-main\db-con\db.php';

session_start();

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: admin-page.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['admin_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the query to check admin credentials
    $stmt = $con->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Admin credentials are valid
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin-page.php");
        exit();
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid username or password.');</script>";
    }

    $stmt->close();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <link rel="icon" type="image/png" href="../src/img/favicon.ico" />
    <link rel="stylesheet" href="./../src/output.css">
</head>

<body>

    <div class="w-full h-screen flex items-center justify-center bg-gray-100">

        <div class="mx-auto flex flex-col w-100 items-center gap-x-4 rounded-xl bg-white p-6 shadow-lg">
            <!-- <h1>Welcome Admin</h1>
            <p>This is the admin sign-in page.</p> -->

            <img src="../src/img/az-logo.png" alt="Admin Image" class="w-16 h-18 rounded-full">
            <h1 class="text-base font-normal text-center text-[#7E7C7C] mb-4"><span class="text-[#025479]"> A-Z PEPTIDES
                </span>
                <br> Welcome Admin
            </h1>
            <form method="POST" action="sign-in.php" class="w-full">
                <input type="hidden" name="admin_login" value="1">
                <div class="mb-4">
                    <label for="username" class="block text-[#7E7C7C] font-regular mb-2">Username:</label>
                    <input type="text" id="username" name="username" required
                        class="w-full px-4 py-2 border border-[#7E7C7C] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#025479]">
                </div>
                <!-- password -->
                <div class="mb-4">
                    <label for="password" class="block text-[#7E7C7C] font-regular mb-2">Password:</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 border border-[#7E7C7C] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#025479]">
                </div>
                <button type="submit" class="w-full bg-[#025479] text-white px-4 py-2 rounded-lg ">
                    Sign In
                </button>
            </form>
        </div>
    </div>


</body>

</html>