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

    <div class="w-full overflow-y-auto mt-6 p-10">

        <h1 class="text-xl font-semibold text-gray-800">Customer Orders</h1>

        <table class="border-collapse border mt-4 rounded-lg ">
            <thead class="bg-gray-700">
                <tr class="">
                    <th
                        class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Order
                        ID</th>
                    <th
                        class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Customer Name</th>
                    <th
                        class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Product</th>
                    <th
                        class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Price</th>
                    <th
                        class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Quantity</th>
                    <th
                        class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Address</th>
                    <th
                        class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Comments</th>
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
                    echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>{$order['product_id']}</td>";
                    echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>" . htmlspecialchars($order['name']) . "</td>";
                    echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>" . htmlspecialchars($order['product_name']) . "</td>";
                    echo "<td class='border px-4 py-3  border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>{$order['price']}</td>";
                    echo "<td class='border px-4 py-3  border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>{$order['quantity']}</td>";
                    echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm '>" . nl2br(htmlspecialchars($order['address'])) . "</td>";
                    echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>" . htmlspecialchars($order['comments']) . "</td>";
                    echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm whitespace-nowrap'>";
                    // your action buttons / QR image go here

                    if (!empty($order['qr_upload'])) {
                        echo "<button type='button' onclick=\"openQrModal('../" . htmlspecialchars($order['qr_upload'], ENT_QUOTES) . "')\" class='text-indigo-600 hover:text-indigo-900'>View QR</button>";
                    } else {
                        echo "<span class='text-gray-400 text-sm'>No QR</span>";
                    }
                    // echo "<a href='delete_order.php?product_id={$order['product_id']}' class='text-red-600 hover:text-red-900 ml-4' onclick=\"return confirm('Delete this order?');\ >Delete</a>";
                    echo "<form action='delete_order.php' method='POST' class='inline ml-4' onsubmit=\"return confirm('Delete this order?');\">
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
            <h1 class="text-gray-600 text-sm font-bold">Total Sales: ₱
                <!-- <p class="font-bold">₱ -->
                <?php
                $totalSalesQuery = "SELECT SUM(price * quantity) AS total_sales FROM complete_orders
                ";
                $totalSalesResult = mysqli_query($con, $totalSalesQuery);
                $totalSalesRow = mysqli_fetch_assoc($totalSalesResult);
                $totalSales = $totalSalesRow['total_sales'];
                echo number_format($totalSales, 2);
                ?>

            </h1>
        </div>
    </div>

</body>

</html>