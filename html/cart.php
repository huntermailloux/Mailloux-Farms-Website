<?php
require 'ConnectionString.php';

$userId = $_SESSION['UserId'];
$cartItems = isset($_SESSION['cart'][$userId]) ? $_SESSION['cart'][$userId] : array();
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailloux Farms</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/scripts.js"></script>
</head>
<body>
    <header>
        <nav>
            <a href="index.php" class="logo"><img src="../images/logo.png" alt="Mailloux Farms Logo" width="100px"></a>
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a href="about.php">About Us</a>
                    <ul class="dropdown-menu">
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="reviews.php">Reviews</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="products.php">Products & Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="orders.php">Orders</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2>Your Cart</h2>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cartItems as $itemId => $itemData): ?>
                    <tr>
                        <td><?php echo $itemData['name']; ?></td>
                        <td>$<?php echo $itemData['price']; ?></td>
                        <td><?php echo $itemData['quantity']; ?></td>
                        <td>$<?php echo $itemData['price'] * $itemData['quantity']; ?></td>
                    </tr>
                    <?php $total += $itemData['price'] * $itemData['quantity']; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="cart-buttons">
            <button onclick="clearCart(<?php echo $userId; ?>)">Clear Cart</button>
            <button onclick="checkout()">Checkout</button>
        </div>
        <div class="cart-summary">
            <p>Total: $<?php echo $total; ?></p>
        </div>
    </div>
    <footer>
        <p style="text-align: left">Logged in as: <?php echo $_SESSION['username']; ?> </p>
        <p style="text-align: left"><a onclick="logout()" href="index.html" action="logout.php">Logout</a></p>
        <p>&copy; 2023 Mailloux Farms. All rights reserved.</p>
    </footer>
</body>
</html>