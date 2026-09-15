<?php
session_start();
require 'C:\xampp\htdocs\az-web-main\db-con\db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = intval($_POST['product_id']);

    $stmt = $con->prepare("DELETE FROM cus_orders WHERE product_id = ?");
    $stmt->bind_param("i", $product_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Order deleted successfully.";
    } else {
        $_SESSION['message'] = "Error deleting order.";
    }

    $stmt->close();
    $con->close();
}

header("Location: admin-page.php");
exit();
