<?php
require 'ConnectionString.php';

if (isset($_POST['item_name']) && isset($_POST['item_price']) && isset($_POST['item_qty_avail']) && isset($_POST['image_name'])) {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $item_qty_avail = $_POST['item_qty_avail'];
    $image_name = $_POST['image_name'];

    // Insert the new item into the database
    $query = "INSERT INTO ItemInfoDB (Item_Price, Item_Qty_Avail, imageName, Item_Name) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("diss", $item_price, $item_qty_avail, $image_name, $item_name);

    if ($stmt->execute()) {
        echo "Item added successfully!";
        header("Location: admin.php?add_item=success");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "All fields are required.";
}
?>