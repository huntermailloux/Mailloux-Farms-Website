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
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="photo-slider">
            <div class="slider-image active" style="background-image: url('../images/slider1.jpg');"></div>
            <div class="slider-image" style="background-image: url('../images/slider2.jpg');"></div>
            <div class="slider-image" style="background-image: url('../images/slider3.jpg');"></div>
            <div class="slider-image" style="background-image: url('../images/slider4.jpg');"></div>
            <div class="slider-image" style="background-image: url('../images/slider5.jpg');"></div>
            <div class="slider-image" style="background-image: url('../images/slider6.jpg');"></div>
            <div class="slider-image" style="background-image: url('../images/slider7.jpg');"></div>
            <div class="slider-image" style="background-image: url('../images/slider8.jpg');"></div>
        </section>
        <section class="about-intro">
            <h2>About Mailloux Farms</h2>
            <p>Mailloux Farms was founded by Jason Mailloux. He started out by farming a property out in Stoney Point, Ontario that he was renting out. 
            The first property Jason purchased (which is the headquarters of his business) was in 2011, located in St Joachim. Mailloux Farm Headquarters 
            features a house built in 1977 and two big red barns built in 1919. Over the years, he has put considerable time working to improve the business, such as 
            installing new silos for his grain, building additions to the barns for storage, as well as pens for various animals. Since then, Jason and 
            Shana Mailloux (his wife / business partner since 2021) purchased a second property in Stoney Point, the same one he rented years ago. As the years go by, Jason has continuously expanded his business 
            with new services and products. Jason continues to keep working on Mailloux Farms to eventually turn it into his full time job and passion.
            </p>
        </section>
        <section class="team">
            <h2>Our Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="../images/ceo.jpg" alt="Jason and Shana Mailloux">
                    <h3>Jason and Shana Mailloux</h3>
                    <p>Founder & CEOs</p>
                </div>
                <div class="team-member">
                    <img src="../images/me.jpg" alt="Hunter Mailloux">
                    <h3>Hunter Mailloux</h3>
                    <p>Systems Administrator</p>
                </div>
                <div class="team-member">
                    <img src="../images/kiddos.jpg" alt="Ava Mailloux and Nolan Manery">
                    <h3>Ava Mailloux and Nolan Manery</h3>
                    <p>Heads of Labor Force</p>
                </div>
                <div class="team-member">
                    <img src="../images/mimi.jpg" alt="Mia">
                    <h3>Mia</h3>
                    <p>Certified Guard Dog</p>
                </div>
                <div class="team-member">
                    <img src="../images/cats.jpg" alt="Boots and Sparrow">
                    <h3>Boots & Sparrow</h3>
                    <p>Managers of Stress Relief</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p style="text-align: left">Logged in as: <?php echo $_SESSION['username']; ?> </p>
        <p style="text-align: left"><a onclick="logout()" href="index.html" action="logout.php">Logout</a></p>
        <p>&copy; 2023 Mailloux Farms. All rights reserved.</p>
    </footer>
    <script>
        (function() {
            const sliderImages = document.querySelectorAll('.slider-image');
            let activeIndex = 0;
    
            function changeImage() {
                sliderImages[activeIndex].classList.remove('active');
                activeIndex = (activeIndex + 1) % sliderImages.length;
                sliderImages[activeIndex].classList.add('active');
            }
    
            setInterval(changeImage, 4000);
        })();
    </script>