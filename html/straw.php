<?php 
    require 'ConnectionScript.php';
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
            <a href="index.php" class="logo"><img src="../images/logo.png" alt="Mailloux Farms Logo" width="100px"></a>
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
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
    <main>
        <section class="product">
            <div class="product-image">
                <img src="../images/straw2.jpg" alt="Straw">
            </div>
            <div class="product-details">
                <h1>Straw</h1>
                <p class="price">$3.00</p>
                <p class="description">Sold by the bale. Our straw is made from the remains of our baling services from farms around Windsor-Essex county!</p>
                <div class="quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" min="1" max="99" value="1">
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </section>
    </main>
    <footer>
        <p style="text-align: left"><a href="login.php">login</a></p>
        <p>&copy; 2023 Mailloux Farms. All rights reserved.</p>
    </footer>
</body>
</html>