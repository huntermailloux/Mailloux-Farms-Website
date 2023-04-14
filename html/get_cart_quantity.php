<?php
require 'ConnectionString.php';

if (isset($_POST['itemId']) && isset($_POST['userId'])) {
    $itemId = intval($_POST['itemId']);
    $userId = intval($_POST['userId']);

    if (isset($_SESSION['cart'][$userId][$itemId])) {
        echo $_SESSION['cart'][$userId][$itemId]['quantity'];
    } else {
        echo "0";
    }
}
?>
