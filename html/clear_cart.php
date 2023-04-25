<!--COMP-2707 Final Project - Mailloux Farms-->
<!--Developed by Hunter Mailloux, 110063485-->
<!--Monday, March 27th, 2023-->

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
