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
