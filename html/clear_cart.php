<?php
require 'ConnectionString.php';

if (isset($_POST['userId'])) {
    $userId = intval($_POST['userId']);

    if (isset($_SESSION['cart'][$userId])) {
        unset($_SESSION['cart'][$userId]);
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
