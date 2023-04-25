<!--COMP-2707 Final Project - Mailloux Farms-->
<!--Developed by Hunter Mailloux, 110063485-->
<!--Monday, March 27th, 2023-->

<?php
require 'ConnectionString.php';

if (isset($_POST['deleteItem'])) {
    $itemId = intval($_POST['itemId']);

    $queryDelete = "DELETE FROM ItemInfoDB WHERE Item_ID = ?";
    $stmtDelete = $conn->prepare($queryDelete);
    $stmtDelete->bind_param("i", $itemId);
    $stmtDelete->execute();

    $messageDelete = "Item deleted successfully!";
}

header("Location: admin.php?message=" . urlencode($messageDelete));
?>
