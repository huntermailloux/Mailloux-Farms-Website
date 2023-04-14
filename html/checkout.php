<?php
require 'ConnectionString.php';

if (isset($_SESSION['UserId'])) {
    $userId = $_SESSION['UserId'];

    if (isset($_SESSION['cart']) && isset($_SESSION['cart'][$userId]) && !empty($_SESSION['cart'][$userId])) {
        foreach ($_SESSION['cart'][$userId] as $itemId => $itemData) {
            $quantity = $itemData['quantity'];
            $query = "INSERT INTO Orders ( Item_ID, Quantity, UserId) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("iii", $itemId, $quantity, $userId);
            $stmt->execute();
            
            $update_query = "UPDATE ItemInfoDB SET Item_Qty_Avail = Item_Qty_Avail - ? WHERE Item_ID = ?";
            $update_stmt = $conn->prepare($update_query);
            $update_stmt->bind_param("ii", $quantity, $itemId);
            $update_stmt->execute();
            $update_stmt->close();
        }

        unset($_SESSION['cart'][$userId]);

        echo "success";
    } else {
        echo "error: cart is empty";
    }
} else {
    echo "error: user not logged in";
}
?>
