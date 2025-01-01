<!-- 1 - Entry point file (Home page) is called index.htm -->
<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { 
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <!-- Use external CSS and JS files to add additional features to the HTML tags. -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!--  Use suitable title for each page -->
        <title>Home</title>
    </head>

    <body>
        <div class="container">
        <!-- Home page includes => Logo. -->
            <div class="logo">
                <img src="css/imgs/logo2.png" alt="">
            </div>
            <!-- Fully connection navigation structure to all pages, including links to other sites -->
            <div class="navbar">
                <div class="links">
                    <ul>
                    <!-- The site should include at least 3 pages. -->
                        <li><a id="b_color" href="index.php">Home</a></li>
                        <li><a href="women.php">Women</a></li>
                        <li><a href="men.php">Men</a></li>
                        <li><a href="brand.php">Brands</a></li>
                        <!-- Contact us (Link to an E-mail). -->
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="about.html">About us</a></li>
                    </ul>
                </div>

                <div class="signin">
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></i></a>
                    <h3> <?php echo  $_SESSION['name'] ?> </h3>
                </div>
            </div>

            <div class="content">
                <div class="content1">
                    <div class="quarter1">
                        <img src="css/imgs/before/carlos-vaz-KP4bxnxAilU-unsplash-removebg-preview.png" alt="">
                        <div>
                            <p>ON SALE</p>
                            <h1>GUCCI</h1>
                            <a href="brand.php">BRANDS</a>
                        </div>
                    </div>
                    <div class="quarter2">
                        <div class="text">
                            <p>Looking for a<br><b style="text-decoration: line-through;">Disuount Code?</b>
                                View our referal program and learn how you and a friend can<br> <b>save 10$</b> on your purchase</p>
                        </div>

                        <div class="img">
                            <img src="css/imgs/before/aaaaa-removebg-preview.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="content2">
                    <div class="quarter3">
                        <img src="css/imgs/before/sad.png" alt="">
                        <div>
                            <p>ON SALE</p>
                            <h1>RAYBAN</h1>
                        </div>

                    </div>
                    <div class="quarter4">
                        <img src="css/imgs/men/man1.png" alt="">
                        <div>
                            <p>ON SALE</p>
                            <h1>VERSACE</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="information">

                <div class="txt">
                    <p>We are Eye Glass bussiness, And this is our web site </p>
                    <p id="hide">We have alot of brands for men, women and kid ..<br> we have many brunches in many countries ....</p>
                    <button id="btn">More Infotmation</button>
                <!-- Include Sounds and Video -->
                    <audio id="myAudio">
                        <source src="audio/click.mp3" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
                </div>

                <div class="photo">
                    <img src="css/imgs/image.png" alt="">
                </div>

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
                        <a class="link-1" href="#">Home</a>

                        <a href="women.php">Women</a>

                        <a href="men.php">Men</a>

                        <a href="about.html">About Us</a>

                        <a href="brand.php">Brands</a>

                        <a href="contact.php">Contact</a>
                    </p>

                    <p>Eye Glass  &copy; 2024</p>
                </div>

            </footer>

        </div>
        <!-- Use external CSS and JS files to add additional features to the HTML tags. -->
        <script src="js/home.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location: log_in.php");
    exit();
}
?>