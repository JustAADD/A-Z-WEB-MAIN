<?php
session_start();
require 'C:\xampp\htdocs\az-web-main\db-con\db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_id'])) {
    $order_id = intval($_POST['order_id']);

    $stmt = $con->prepare("DELETE FROM cus_orders WHERE order_id = ?");
    $stmt->bind_param("i", $order_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Order deleted successfully.";
    } else {
        $_SESSION['message'] = "Error deleting order.";
    }

    $stmt->close();
    $con->close();
}

header("Location: admin_page.php");
exit();
