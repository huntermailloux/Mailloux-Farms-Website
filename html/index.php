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
        <section class="hero">
            <div class="hero-text">
                <h1>Welcome back, <?php echo $_SESSION['FirstName'] . ' ' . $_SESSION['LastName']; ?>!</h1>
                <a href="products.php" class="cta">Explore Our Products & Services</a>
            </div>
        </section>
        <section class="overview">
            <h2>What We Offer</h2>
            <div class="overview-grid">
                <div class="overview-item">
                    <a href="products.php"><img src="../images/egg.jpg" alt="Product 1"></a>                    
                    <h3>Eggs</h3>
                    <p>Farm fresh eggs layed by our chickens on the farm.</p>
                </div>
                <div class="overview-item">
                    <a href="products.php"><img src="../images/straw.jpg" alt="Product 2"></a>
                    <h3>Straw Bales</h3>
                    <p>Straw bales from local farms around Windsor-Essex.</p>
                </div>
                <div class="overview-item">
                    <a href="products.php"><img src="../images/stumping.jpg" alt="Service 1"></a>
                    <h3>Stumping Service</h3>
                    <p>We get rid of any sized tree stump.</p>
                </div>
                <div class="overview-item">
                    <a href="products.php"><img src="../images/baling.jpg" alt="Service 2"></a>
                    <h3>Baling Service</h3>
                    <p>We bale any wheat remains left in the field.</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p style="text-align: left">Logged in as: <?php echo $_SESSION['username']; ?> </p>
        <p style="text-align: left"><a onclick="logout()" href="index.html" action="logout.php">Logout</a></p>
        <p>&copy; 2023 Mailloux Farms. All rights reserved.</p>
    </footer>
</body>
</html>