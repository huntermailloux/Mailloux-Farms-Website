<?php
require 'ConnectionString.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (isset($_POST['itemId']) && isset($_POST['userId'])) {
    $itemId = $_POST['itemId'];
    $userId = $_POST['userId'];
    error_log("Item ID: " . $itemId);
    error_log("User ID: " . $userId);
    $quantity = 1;

    // Check if the item is already in the cart for the user
    $query = "SELECT * FROM Cart WHERE Item_ID = ? AND UserId = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ii', $itemId, $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Item is already in the cart, update the quantity
        $query = "UPDATE Cart SET Quantity = Quantity + 1 WHERE Item_ID = ? AND UserId = ?";
    } else {
        // Item is not in the cart, insert a new row with the item
        $query = "INSERT INTO Cart (Item_ID, UserId, Quantity) VALUES (?, ?, ?)";
    }

    $stmt = $conn->prepare($query);
    if ($result->num_rows > 0) {
        $stmt->bind_param('ii', $itemId, $userId);
    } else {
        $stmt->bind_param('iii', $itemId, $userId, $quantity);
    }
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo 'success';
    } else {
        echo 'error';
    }

    $stmt->close();
} else {
    echo 'error';
}

$conn->close();
?>
