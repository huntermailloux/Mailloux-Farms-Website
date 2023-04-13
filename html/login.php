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
    <script src="../js/scripts.js"></script>
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
                        <li><a onclick="signin()">Cart</a></li>
                        <li><a onclick="signin()">Checkout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
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
            <button onclick="window.location='#create-account-form'" class="register-btn">Create Account</button>
        </div>
        <div class="create-account-container" id="create-account-form">
            <form class="create-account-form" action="create_account.php" method="post">
                <h2>Create Account</h2>
                <?php if (isset($_GET['error']) && $_GET['error'] == 'username_already_exists'): ?>
                    <div class="error">The username already exists. Please choose a different username.</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="FirstName">First Name</label>
                    <input type="text" name="FirstName" id="FirstName" required>
                </div>
                <div class="form-group">
                    <label for="LastName">Last Name</label>
                    <input type="text" name="LastName" id="LastName" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password"required>
                </div>
                <button type="submit" class="submit-btn" onclick="accountcreated()">Create Account</button>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy; 2023 Mailloux Farms. All rights reserved.</p>
    </footer>  
</body>
</html>
