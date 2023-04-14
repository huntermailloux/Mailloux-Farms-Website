<?php
require 'ConnectionString.php';

if (isset($_POST['updateStraw'])) {
    $strawStock = intval($_POST['strawStock']);

    $queryStraw = "UPDATE ItemInfoDB SET Item_Qty_Avail = ? WHERE Item_ID = 2";
    $stmtStraw = $conn->prepare($queryStraw);
    $stmtStraw->bind_param("i", $strawStock);
    $stmtStraw->execute();

    $messageStraw = "Stock updated successfully for Straw!";
}

if (isset($_POST['updateEgg'])) {
    $eggStock = intval($_POST['eggStock']);

    $queryEgg = "UPDATE ItemInfoDB SET Item_Qty_Avail = ? WHERE Item_ID = 1";
    $stmtEgg = $conn->prepare($queryEgg);
    $stmtEgg->bind_param("i", $eggStock);
    $stmtEgg->execute();

    $messageEgg = "Stock updated successfully for Egg!";
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
        <?php if (isset($messageStraw)): ?>
            <p><?php echo $messageStraw; ?></p>
        <?php endif; ?>
        <form action="admin.php" method="post">
            <label for="strawStock">Change stock for Straw:</label>
            <input type="number" id="strawStock" name="strawStock" required>
            <input type="submit" name="updateStraw" value="Update Straw Stock">
        </form>
        <br>
        <?php if (isset($messageEgg)): ?>
            <p><?php echo $messageEgg; ?></p>
        <?php endif; ?>
        <form action="admin.php" method="post">
            <label for="eggStock">Change stock for Egg:</label>
            <input type="number" id="eggStock" name="eggStock" required>
            <input type="submit" name="updateEgg" value="Update Egg Stock">
        </form>
    </div>
    <footer>
        <p style="text-align: left"><a href="index.html">Logout</a></p>
        <p>&copy; 2023 Mailloux Farms. All rights reserved.</p>
    </footer>
</body>
</html>
