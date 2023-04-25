<!--COMP-2707 Final Project - Mailloux Farms-->
<!--Developed by Hunter Mailloux, 110063485-->
<!--Monday, March 27th, 2023-->

<?php 
    require 'ConnectionString.php';
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
    <main>
        <section class="contact">
            <h1>Contact Us</h1>
            <form action="https://formspree.io/f/xwkjrjge" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="_replyto" required>

                <label for="inquiry">Inquiry:</label>
                <select id="inquiry" name="inquiry" required>
                    <option value="">Select an inquiry type</option>
                    <option value="product_info">Product Information</option>
                    <option value="order_status">Order Status</option>
                    <option value="quote">Get a Quote</option>
                    <option value="general_question">General Question</option>
                </select>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <input type="hidden" name="_to" value="maillo51@uwindsor.ca">

                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
    <footer>
        <p style="text-align: left">Logged in as: <?php echo $_SESSION['username']; ?> </p>
        <p style="text-align: left"><a onclick="logout()" href="index.html" action="logout.php">Logout</a></p>
        <p>&copy; 2023 Mailloux Farms. All rights reserved.</p>
    </footer>
</body>
</html>