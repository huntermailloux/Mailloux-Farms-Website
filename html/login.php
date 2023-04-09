<?php 
    require 'ConnectionString.php';
?>
<!-- LOGIN TO ADMIN IS:
    Username: JMailloux
    Password: 12345 -->
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
            <a href="index.html" class="logo"><img src="../images/logo.png" alt="Mailloux Farms Logo" width="100px"></a>
            <ul class="nav">
                <li><a href="index.html">Home</a></li>
                <li class="dropdown">
                    <a href="about.html">About Us</a>
                    <ul class="dropdown-menu">
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="reviews.html">Reviews</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="products.html">Products & Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="eggs.html">Eggs</a></li>
                        <li><a href="straw.html">Straw</a></li>
                        <li><a href="stumping.html">Stumping</a></li>
                        <li><a href="baling.html">Baling</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <div class="login-container">
        <form class="login-form" action="login_process.php" method="post">
            <h2>Login</h2>
            <?php if (isset($_GET['error'])): ?>
                <div class="error">Invalid username or password.</div>
            <?php endif; ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="submit-btn">Login</button>
        </form>
    </div>
    <footer>
        <p style="text-align: left"><a href="Test.php">login</a></p>
        <p>&copy; 2023 Mailloux Farms. All rights reserved.</p>
    </footer>  
</body>
</html>
