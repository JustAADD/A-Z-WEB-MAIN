<?php
session_start();
require 'C:\xampp\htdocs\az-web-main\db-con\db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $stmt = $con->prepare("DELETE FROM cus_info WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Order deleted successfully.";
    } else {
        $_SESSION['message'] = "Error deleting order.";
    }

    $stmt->close();
    $con->close();
}

header("Location: cus_info.php");
exit();
