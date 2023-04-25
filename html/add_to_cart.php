<!--COMP-2707 Final Project - Mailloux Farms-->
<!--Developed by Hunter Mailloux, 110063485-->
<!--Monday, March 27th, 2023-->

<?php
require 'ConnectionString.php';

if (isset($_POST['itemId']) && isset($_POST['itemPrice']) && isset($_POST['userId']) && isset($_POST['itemName']) && isset($_POST['quantity'])) {
    $itemId = intval($_POST['itemId']);
    $itemPrice = floatval($_POST['itemPrice']);
    $userId = intval($_POST['userId']);
    $itemName = $_POST['itemName'];
    $quantity = intval($_POST['quantity']);

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    if (!isset($_SESSION['cart'][$userId])) {
        $_SESSION['cart'][$userId] = array();
    }

    if (isset($_SESSION['cart'][$userId][$itemId])) {
        $_SESSION['cart'][$userId][$itemId]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$userId][$itemId] = array(
            'name' => $itemName,
            'price' => $itemPrice,
            'quantity' => $quantity
        );
    }

    echo "success";
} else {
    echo "error";
}
?>