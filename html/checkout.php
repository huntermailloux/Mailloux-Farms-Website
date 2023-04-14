<?php
require 'ConnectionString.php';

if (isset($_SESSION['UserId'])) {
    $userId = $_SESSION['UserId'];

    if (isset($_SESSION['cart']) && isset($_SESSION['cart'][$userId]) && !empty($_SESSION['cart'][$userId])) {
        $all_items_available = true;

        foreach ($_SESSION['cart'][$userId] as $itemId => $itemData) {
            $quantity = $itemData['quantity'];
            $query = "SELECT Item_Qty_Avail FROM ItemInfoDB WHERE Item_ID = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i", $itemId);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $itemQtyAvail = $row['Item_Qty_Avail'];

            if ($quantity > $itemQtyAvail) {
                $all_items_available = false;
                break;
            }
        }

        if ($all_items_available) {
            foreach ($_SESSION['cart'][$userId] as $itemId => $itemData) {
                $quantity = $itemData['quantity'];
                $query = "INSERT INTO Orders (Item_ID, Quantity, UserId) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("iii", $itemId, $quantity, $userId);
                $stmt->execute();

                $query = "UPDATE ItemInfoDB SET Item_Qty_Avail = Item_Qty_Avail - ? WHERE Item_ID = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ii", $quantity, $itemId);
                $stmt->execute();
            }

            unset($_SESSION['cart'][$userId]);
            echo "success";
        } else {
            echo "error: not enough stock available";
        }
    } else {
        echo "error: cart is empty";
    }
} else {
    echo "error: user not logged in";
}
?>
