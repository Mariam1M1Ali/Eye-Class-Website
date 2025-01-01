<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,500;0,700;0,800;0,900;1,100;1,200;1,600;1,700;1,900&family=Open+Sans:ital,wght@0,400;0,700;0,800;1,700;1,800&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
        <!-- Use external CSS and JS files to add additional features to the HTML tags. -->
        <link rel="stylesheet" href="css/womencss.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--  Use suitable title for each page -->
        <title>Women</title>
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
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                    <h3> <?php echo  $_SESSION['name'] ?> </h3>

                </div>
            </div>

            <div class="women">
                <p class="text">women's sunglasses</p>
                <!-- <img src="css/imgs/womenImg.png" alt=""> -->
            </div>


            <div class="title">Top Products</div>
            <div class="cards">
                <div class="float1">
                    <div class="card">
                        <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                        <img id="img1" class="product-image" src="css/imgs/men/remove/1.png" alt="Product Image">
                        <form action="addToCartWomen.php" method="post">
                            <input name="nameGlass" class="product-name" type="text" value="Gucci 1" readonly>
                            <p>
                                <input name="priceGlass" class="product-price" type="text" value="$1000.00" readonly>
                            <p>
                                <button id="btn1" class="add-to-cart-button">Add to Cart</button>
                        </form>
                    </div>

                    <div class="card">
                        <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                        <img id="img2" class="product-image" src="css/imgs/men/remove/2.png" alt="Product Image">

                        <form action="addToCartWomen.php" method="post">
                            <input name="nameGlass" class="product-name" type="text" value="Gucci 2" readonly>
                            <p>
                                <input name="priceGlass" class="product-price" type="text" value="$50.00" readonly>
                            <p>

                                <button id="btn1" class="add-to-cart-button">Add to Cart</button>

                        </form>
                          
                    </div>

                    <div class="card">
                        <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                        <img id="img3" class="product-image" src="css/imgs/men/remove/3.png" alt="Product Image">

                        <form action="addToCartWomen.php" method="post">
                            <input name="nameGlass" class="product-name" type="text" value="Gucci 3" readonly><p>
                            <input name="priceGlass" class="product-price" type="text" value="$99.99" readonly><p>
                            <button id="btn1" class="add-to-cart-button">Add to Cart</button>
                        </form>

                          
                    </div>

                </div>

                <div class="float2">
                    <div class="card">
                        <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                        <img id="img1" class="product-image" src="css/imgs/men/remove/1.png" alt="Product Image">

                        <form action="addToCartWomen.php" method="post">
                            <input name="nameGlass" class="product-name" type="text" value="Gucci 4" readonly>
                            <p>
                                <input name="priceGlass" class="product-price" type="text" value="$500.00" readonly>
                            <p>
                                <button id="btn1" class="add-to-cart-button">Add to Cart</button>

                        </form>
                          
                    </div>

                    <div class="card">
                        <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                        <img id="img2" class="product-image" src="css/imgs/men/remove/2.png" alt="Product Image">

                        <form action="addToCartWomen.php" method="post">
                            <input name="nameGlass" class="product-name" type="text" value="Gucci 5" readonly>
                            <p>
                                <input name="priceGlass" class="product-price" type="text" value="$100.00" readonly>
                            <p>
                                <button id="btn1" class="add-to-cart-button">Add to Cart</button>

                        </form>
                          
                    </div>

                    <div class="card">
                        <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                        <img id="img3" class="product-image" src="css/imgs/men/remove/3.png" alt="Product Image">

                        <form action="addToCartWomen.php" method="post">
                            <input name="nameGlass" class="product-name" type="text" value="Gucci 6" readonly>
                            <p>
                                <input name="priceGlass" class="product-price" type="text" value="$200.00" readonly>
                            <p>
                                <button id="btn1" class="add-to-cart-button">Add to Cart</button>
                        </form>
                    </div>
                    <p class="clear"></p>
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

                    <p>Eye Glass &copy; 2024</p>
                </div>

            </footer>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location: log_in.php");
    exit();
}
?>