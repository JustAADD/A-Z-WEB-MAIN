<?php



// if (!isset($_SESSION['admin'])) {
//     header('location: login.php');
//     exit;
// }


// if (!isset($_SESSION['admin'])) {
//     // Redirect to login page if not logged in
//     header('Location: login.php');
//     exit();
// }

// if (isset($_GET['logout'])) {
//     // Destroy the session and redirect to login page
//     session_destroy();
//     header('Location: login.php');
//     exit();
// }



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Z Admin</title>
    <link rel="icon" type="image/png" href="../src/img/favicon.ico" />
    <link rel="stylesheet" href="../src/output.css">
</head>

<body class="bg-gray-100">

    <?php include('sidebar.php'); ?>

    <!-- Main Content Area Wrapper -->
    <div class="flex-1 flex flex-col overflow-hidden p-6">
        <!-- Top Navbar -->
        <!-- <header class="h-16 bg-white shadow flex items-center justify-between px-6">
            <h1 class="text-xl font-semibold text-gray-800">Dashboard Overviews</h1>
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 text-sm font-medium">
                Add Project
            </button>
        </header> -->

        <!-- Dynamic Content Body -->
        <!-- <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-gray-500 text-sm font-medium">Total Users</h3>
                    <p class="text-3xl font-bold text-gray-900 mt-2">1,245</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-gray-500 text-sm font-medium">Monthly Revenue</h3>
                    <p class="text-3xl font-bold text-gray-900 mt-2">$34,200</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-gray-500 text-sm font-medium">Active Tasks</h3>
                    <p class="text-3xl font-bold text-gray-900 mt-2">42</p>
                </div>
            </div>
        </main> -->

        <!-- customer order table -->

        <div class="w-auto overflow-x-auto mt-6">

            <h1 class="text-xl font-semibold text-gray-600">Customer Orders</h1>

            <table class="border-collapse border bg-gray-600 mt-4 rounded-lg">
                <thead class="bg-gray-600">
                    <tr>
                        <th
                            class="border border-gray-300 px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Order
                            ID</th>
                        <th
                            class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Customer Name</th>
                        <th
                            class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Product</th>
                        <th
                            class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Quantity</th>
                        <th
                            class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Address</th>
                        <th
                            class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-100 divide-y divide-gray-400">

                    <?php
                    include('./../db-con/db.php');

                    $stmt = mysqli_prepare($con, "SELECT product_id, product_name, price, name, email, phone, address, quantity, comments, qr_upload FROM cus_orders ORDER BY product_id DESC");
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);


                    while ($order = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td class='border border-gray-300 text-gray-600 text-sm px-6 py-4 whitespace-nowrap'>{$order['product_id']}</td>";
                        echo "<td class='border border-gray-300 text-gray-600 text-sm px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($order['name']) . "</td>";
                        echo "<td class='border border-gray-300 text-gray-600 text-sm px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($order['product_name']) . "</td>";
                        echo "<td class='border border-gray-300 text-gray-600 text-sm px-6 py-4 whitespace-nowrap'>{$order['quantity']}</td>";
                        echo "<td class='border border-gray-300 text-gray-600 text-sm px-6 py-4'>" . nl2br(htmlspecialchars($order['address'])) . "</td>";
                        echo "<td class='border border-gray-300 text-gray-600 text-sm px-6 py-4 whitespace-nowrap'>";
                        // your action buttons / QR image go here
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

            <div class="mt-4">
                <h1 class="text-gray-600 text-sm">Note: The table is dynamic and will display orders from the database.
                </h1>
                <h1 class="text-gray-600 text-sm">Total Sales: </h1>
            </div>
        </div>


</body>

</html>