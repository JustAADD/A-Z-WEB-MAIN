<?php
session_start();
require 'C:\xampp\htdocs\az-web-main\db-con\db.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // throw exceptions

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = intval($_POST['product_id']);

    try {
        $con->begin_transaction();

        // 1. Copy the row(s) to the dispatched table
        $insert = $con->prepare("
            INSERT INTO complete_orders (product_id, product_name, price, name, email, phone, address, quantity, comments, qr_upload)
            SELECT product_id, product_name, price, name, email, phone, address, quantity, comments, qr_upload
            FROM cus_orders
            WHERE product_id = ?
        ");
        $insert->bind_param("i", $product_id);
        $insert->execute();
        $copied = $insert->affected_rows;
        $insert->close();

        if ($copied === 0) {
            throw new Exception("Order not found.");
        }

        // 2. Delete from the original table
        $delete = $con->prepare("DELETE FROM cus_orders WHERE product_id = ?");
        $delete->bind_param("i", $product_id);
        $delete->execute();
        $delete->close();

        $con->commit();
        $_SESSION['message'] = "Order dispatched successfully.";
    } catch (Throwable $e) {
        $con->rollback();
        error_log($e->getMessage());
        $_SESSION['message'] = "Error dispatching order.";
    }

    $con->close();
}

header("Location: admin_page.php");
exit();
