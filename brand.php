<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Brands</title>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,500;0,700;0,800;0,900;1,100;1,200;1,600;1,700;1,900&family=Open+Sans:ital,wght@0,400;0,700;0,800;1,700;1,800&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Use external CSS and JS files to add additional features to the HTML tags. -->
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/brandcss.css">
        <!--  Use suitable title for each page -->
        <title>Brands</title>
    </head>

    <body>
        <div class="container">

            <div class="logo">
                <img src="css/imgs/logo2.png" alt="">
            </div>

            <div class="navbar">
                <div class="links">
                    <ul>
                        <!-- Each page should be linked to the Home page. -->
                        <li><a id="b_color" href="index.php">Home</a></li>
                        <li><a href="women.php">Women</a></li>
                        <li><a href="men.php">Men</a></li>
                        <li><a href="brand.php">Brands</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="about.html">About us</a></li>
                    </ul>
                </div>

                <div class="signin">
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></i></a>
                    <h3> <?php echo  $_SESSION['name'] ?> </h3>

                </div>
            </div>



            <div class="brand">
                <div class="imgs">
                    <img class="mainImg" id="firstImg" src="css/imgs/brands/remove/9.png" alt="">
                    <div class="imgsContainer">
                        <img onclick="changeOne()" class="imgOne" src="css/imgs/brands/remove/9darkblue.png" alt="">
                        <img onclick="changeTwo()" class="imgTwo" src="css/imgs/brands/remove/9blue.png" alt="">
                        <img onclick="changeThree()" class="imgThree" src="css/imgs/brands/remove/9brown.png" alt="">
                    </div>
                </div>
                <div class="txt">
                    <div class="gucci">GUCCI Black</div>
                    <div class="details">GUCCi GG06619GG06619 003 Cat Eye Suglasses Gucci</div>
                    <div class="price"> <del>$600.00</del> $544.00</div>
                    <div class="stars">
                        <img src="css/imgs/brands/remove/star.png" alt="">
                        <img src="css/imgs/brands/remove/star.png" alt="">
                        <img src="css/imgs/brands/remove/star.png" alt="">
                        <img src="css/imgs/brands/remove/star.png" alt="">
                        <img src="css/imgs/brands/remove/rating.png" alt="">
                        <p>99% Customers Reviews</p>
                    </div>
                    <br><br>
                    <hr>
                    <div class="gucci">GUCCI Blue</div>
                    <div class="details">GUCCi GG06619GG066191234 01177 Cat Eye Suglasses Gucci</div>
                    <div class="price"> <del>$600.00</del> $500.00</div>
                    <div class="stars">
                        <img src="css/imgs/brands/remove/star.png" alt="">

                        <img src="css/imgs/brands/remove/star.png" alt="">
                        <img src="css/imgs/brands/remove/rating.png" alt="">
                        <p>50% Customers Reviews</p>
                    </div>
                </div>
            </div>
            <p class="txt2">Brands</p>
            <div class="video">
            <!-- Include Sounds and Video -->
                <video controls loop autoplay muted>
                    <source src="css/videos/IMG_0559.MP4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <!-- Include Sounds and Video -->
                <video loop autoplay muted>
                    <source src="css/videos/IMG_0558.MP4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

            </div>
            <div class="video">
            <!-- Include Sounds and Video -->
                <video class="secondSectionVideos" controls loop autoplay muted>
                    <source src="css/videos/brand.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <!-- Include Sounds and Video -->   
                <video class="secondSectionVideos" loop autoplay muted>
                    <source src="css/videos/brand2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

            </div>

            <footer class="footer-distributed">

                <div class="footer-right">

                    <a href="https://www.facebook.com/profile.php?id=100070308623851"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/zyadabdelhakim?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://twitter.com/ahmedhishamrsmy"><i class="fa-brands fa-square-x-twitter"></i></a>
                    <a href="https://youtu.be/f0oy-NicIgE?si=hSkdKf-ulcz8CwrO"><i class="fa-brands fa-square-youtube"></i></a>

                </div>

                <div class="footer-left">

                    <p class="footer-links">
                        <a class="link-1" href="index.php">Home</a>

                        <a href="women.php">Women</a>

                        <a href="men.php">Men</a>

                        <a href="about.html">About Us</a>

                        <a href="brand.php">Brands</a>

                        <a href="contact.php">Contact</a>
                    </p>

                    <p>Eye Glass &copy; 2024</p>
                </div>

            </footer>
        </div>
        <!-- Use external CSS and JS files to add additional features to the HTML tags. -->
        <script src="js/brandjs.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location: log_in.php");
    exit();
}
?>