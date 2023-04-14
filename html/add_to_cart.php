<?php
require 'ConnectionString.php';

if (isset($_POST['itemId']) && isset($_POST['itemPrice']) && isset($_POST['userId']) && isset($_POST['itemName'])) {
    $itemId = intval($_POST['itemId']);
    $itemPrice = floatval($_POST['itemPrice']);
    $userId = intval($_POST['userId']);
    $itemName = $_POST['itemName'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    if (!isset($_SESSION['cart'][$userId])) {
        $_SESSION['cart'][$userId] = array();
    }

    if (isset($_SESSION['cart'][$userId][$itemId])) {
        $_SESSION['cart'][$userId][$itemId]['quantity'] += 1;
    } else {
        $_SESSION['cart'][$userId][$itemId] = array(
            'name' => $itemName,
            'price' => $itemPrice,
            'quantity' => 1
        );
    }

    echo "success";
} else {
    echo "error";
}
?>