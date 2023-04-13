<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require 'ConnectionString.php';
    $query = "SELECT * FROM ItemInfoDB";
    $result = $conn->query($query);
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
                </li>
            </ul>
        </nav>
    </header>
    <script>
        var userId = <?php echo $_SESSION['UserId']; ?>;
    </script>
    <div class="container">
        <div class="grid">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="grid-item">
                    <img src="../images/<?php echo $row['imageName']; ?>" alt="<?php echo $row['Item_Name']; ?>">
                    <h3><?php echo $row['Item_Name']; ?></h3>
                    <p>Price: $<?php echo $row['Item_Price']; ?></p>
                    <p>Quantity available: <?php echo $row['Item_Qty_Avail']; ?></p>
                    <button onclick="addToCart(<?php echo $row['Item_ID']; ?>, userId, <?php echo $row['Item_Price']; ?>)">Add to Cart</button>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <footer>
        <p style="text-align: left">Logged in as: <?php echo $_SESSION['username']; ?> </p>
        <p style="text-align: left"><a onclick="logout()" href="index.html" action="logout.php">Logout</a></p>
        <p>&copy; 2023 Mailloux Farms. All rights reserved.</p>
    </footer>
</body>
</html>
