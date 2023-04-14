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
        <section class="reviews-container">
            <h2>Customer Reviews</h2>
            <div class="review">
                <h3>Jane Doe</h3>
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                </div>
                <p>Great products and service! I highly recommend Mailloux Farms.</p>
            </div>
            <div class="review">
                <h3>John Doe</h3>
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">☆</span>
                </div>
                <p>Overall positive experience with Mailloux Farms. Will be recommending to my friends and family!</p>
            </div>

            <a href="#write-review" class="write-review-btn">Write a Review!</a>
        </section>

        <section class="review-form" id="write-review">
            <h2>Write a Review</h2>
            <form action="https://formspree.io/f/mnqygkaq" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="rating">Rating:</label>
                    <select id="rating" name="rating" required>
                        <option value="">Select a rating</option>
                        <option value="1">★☆☆☆☆</option>
                        <option value="2">★★☆☆☆</option>
                        <option value="3">★★★☆☆</option>
                        <option value="4">★★★★☆</option>
                        <option value="5">★★★★★</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Submit Review</button>
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