<?php

include('./db-con/db.php');

if (isset($_GET['id'])) {

    $id = (int) $_GET['id'];

    $stmt = mysqli_prepare($con, "SELECT product_image FROM shop_items WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $imageData = $row['product_image'];

        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mimetype = $finfo->buffer($imageData);

        header('Content-Type: ' . $mimetype);
        header('Content-Length: ' . strlen($imageData));
        echo $imageData;
        exit;
    }
}

http_response_code(404);
exit;
