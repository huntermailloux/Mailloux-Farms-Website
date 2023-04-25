<!--COMP-2707 Final Project - Mailloux Farms-->
<!--Developed by Hunter Mailloux, 110063485-->
<!--Monday, March 27th, 2023-->

<?php
require 'ConnectionString.php';

$query = "SELECT * FROM ItemInfoDB";
$result = $conn->query($query);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['itemId']) && isset($_POST['itemStock'])) {
    $itemId = intval($_POST['itemId']);
    $itemStock = intval($_POST['itemStock']);

    $queryUpdate = "UPDATE ItemInfoDB SET Item_Qty_Avail = ? WHERE Item_ID = ?";
    $stmtUpdate = $conn->prepare($queryUpdate);
    $stmtUpdate->bind_param("ii", $itemStock, $itemId);
    $stmtUpdate->execute();

    $message = "Stock updated successfully!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailloux Farms</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <nav>
            <img src="../images/logo.png" alt="Mailloux Farms Logo" width="100px">
            <ul class="nav">
                <li>Logged in as: Jason Mailloux</li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2>Update Stock</h2>
        <?php if (isset($message)): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <form action="admin.php" method="post">
                <label for="itemStock-<?php echo $row['Item_ID']; ?>">Change stock for <?php echo $row['Item_Name']; ?>:</label>
                <input type="number" id="itemStock-<?php echo $row['Item_ID']; ?>" name="itemStock" required>
                <input type="hidden" name="itemId" value="<?php echo $row['Item_ID']; ?>">
                <input type="submit" value="Update <?php echo $row['Item_Name']; ?> Stock">
            </form>
            <br>
        <?php endwhile; ?>
        <h2>Add New Item</h2>
        <form action="add_item.php" method="post">
            <label for="item_name">Item Name:</label>
            <input type="text" name="item_name" id="item_name" required>

            <label for="item_price">Item Price:</label>
            <input type="number" step="0.01" name="item_price" id="item_price" required>

            <label for="item_qty_avail">Quantity Available:</label>
            <input type="number" name="item_qty_avail" id="item_qty_avail" required>

            <label for="image_name">Image File Name:</label>
            <input type="text" name="image_name" id="image_name" required>

            <input type="submit" value="Add Item">
        </form>
        <?php 
            $queryItems = "SELECT * FROM ItemInfoDB";
            $resultItems = $conn->query($queryItems);
        ?>
        <h2>Delete Item(s)</h2>
        <?php if (isset($_GET['message'])): ?>
            <p><?php echo urldecode($_GET['message']); ?></p>
        <?php endif; ?>
        <table>
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = $resultItems->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['Item_Name']; ?></td>
                    <td>
                        <form action="delete_item.php" method="post">
                            <input type="hidden" name="itemId" value="<?php echo $row['Item_ID']; ?>">
                            <input type="submit" name="deleteItem" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <footer>
        <p style="text-align: left"><a onclick="logout()" href="index.html">Logout</a></p>
        <p>&copy; 2023 Mailloux Farms. All rights reserved.</p>
    </footer>
</body>
</html>