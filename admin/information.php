<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Z Admin</title>
    <link rel="icon" type="image/png" href="../src/img/favicon.ico" />
    <link rel="stylesheet" href="./../src/output.css">
</head>

<body>

    <?php include('sidebar.php'); ?>

    <main class="w-full overflow-x-hidden overflow-y-auto bg-gray-50 p-6">

        <h1 class="text-xl font-semibold text-gray-800">Customer information</h1>
        <p class="text-gray-600 text-sm">This page displays all the customer information.</p>
        <div class="w-full overflow-y-auto  ">

            <table class="border-collapse border mt-4 rounded-lg ">
                <thead class="bg-gray-700">
                    <tr class="">
                        <th
                            class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Customer Name</th>
                        <th
                            class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Address</th>
                        <th
                            class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Email</th>
                        <th
                            class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Contact number</th>

                        <th
                            class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Action</th>
                    </tr>
                </thead>
                <tbody class="">

                    <?php

                    require('C:\xampp\htdocs\az-web-main\db-con\db.php');
                    // require_once('../db-con/db.php');

                    $stmt = mysqli_prepare($con, "SELECT product_id, product_name, price, name, email, phone, address, quantity, comments, qr_upload FROM complete_orders ORDER BY product_id DESC");
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);


                    while ($order = mysqli_fetch_assoc($result)) {
                        echo "<tr>";

                        echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>" . htmlspecialchars($order['name']) . "</td>";
                        echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>" . htmlspecialchars($order['email']) . "</td>";
                        echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>" . htmlspecialchars($order['phone']) . "</td>";


                        echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm '>" . nl2br(htmlspecialchars($order['address'])) . "</td>";

                        echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm whitespace-nowrap'>";
                        // your action buttons / QR image go here


                        // echo "<a href='delete_order.php?product_id={$order['product_id']}' class='text-red-600 hover:text-red-900 ml-4' onclick=\"return confirm('Delete this order?');\ >Delete</a>";
                        echo "<form action='information.php' method='POST' class='inline ml-4' onsubmit=\"return confirm('Delete this order?');\">
                                <input type='hidden' name='product_id' value='{$order['product_id']}'>
                                <button type='submit' class='text-red-600 hover:text-red-900 bg-transparent border-0 p-0 cursor-pointer'>Delete</button>
                              </form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>

            <div id="qrModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg shadow-lg w-full max-w-sm mx-4 relative">
                    <div class="flex justify-between items-center border-b px-4 py-3">
                        <h3 class="text-lg font-medium text-gray-800">Product QR Code</h3>
                        <button type="button" onclick="closeQrModal()"
                            class="text-gray-400 hover:text-gray-600 text-2xl leading-none">&times;</button>
                    </div>
                    <div class="p-6 flex justify-center items-center min-h-[280px]">
                        <img id="qrImage" src="" class="max-w-full max-h-72" alt="Product QR Code">
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <h1 class="text-gray-600 text-sm">Note: The table is dynamic and will display orders from the database.
                </h1>
                <h1 class="text-gray-600 text-sm font-bold">Customer Count:
                    <?php
                    $totalCustomersQuery = "SELECT COUNT(*) AS total_customers FROM complete_orders";
                    $totalCustomersResult = mysqli_query($con, $totalCustomersQuery);
                    $totalCustomersRow = mysqli_fetch_assoc($totalCustomersResult);
                    $totalCustomers = $totalCustomersRow['total_customers'];
                    echo number_format($totalCustomers);
                    ?>
                </h1>
            </div>
        </div>
    </main>

</body>

</html>