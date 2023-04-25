<!--COMP-2707 Final Project - Mailloux Farms-->
<!--Developed by Hunter Mailloux, 110063485-->
<!--Monday, March 27th, 2023-->

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
