<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Men</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/mencss.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,500;0,700;0,800;0,900;1,100;1,200;1,600;1,700;1,900&family=Open+Sans:ital,wght@0,400;0,700;0,800;1,700;1,800&family=Ubuntu:ital@1&display=swap" rel="stylesheet">

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

            <div class="men">
                <p class="text">men's sunglasses</p>
                <img src="css/imgs/men.png" alt="">
            </div>

            <div class="cards">
                <div class="card">
                <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                    <img id="img1" class="product-image" src="css/imgs/men/remove/1.png" alt="Product Image">
                    <div class="colors">
                        <a class="black" onclick="changeColor('img1', '1.png')"></a>
                        <a class="blue"  onclick="changeColor('img1', '1bluee.png')"></a>
                        <a class="brown" onclick="changeColor('img1', '1brownn.png')"></a>
                    </div>
                    
                    <form action="addToCartMen.php" method="post">
                        <input name="nameGlass" class="product-name" type="text" value="Glass 1" readonly><p>
                        <input name="priceGlass" class="product-price" type="text" value="$199.99" readonly><p>
                        <button id="btn1" class="add-to-cart-button">Add to Cart</button> 
                    </form>
                   
                      
                </div>

                <div class="card">
                    <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                    <img id="img2" class="product-image" src="css/imgs/men/remove/2.png" alt="Product Image">
                    <div class="colors">
                        <a class="black" onclick="changeColor('img2', '2.png')"></a>
                        <a class="blue"  onclick="changeColor('img2', '2bluee.png')"></a>
                        <a class="brown" onclick="changeColor('img2', '2brownn.png')"></a>
                    </div>
                   
                    <form action="addToCartMen.php" method="post">
                        <input name="nameGlass" class="product-name" type="text" value="Glass 2" readonly><p>
                        <input name="priceGlass" class="product-price" type="text" value="$299.99" readonly><p>
                        <button id="btn2" class="add-to-cart-button">Add to Cart</button>
                       
                    </form>
                      
                </div>

                <div class="card">
                    <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                    <img id="img3" class="product-image" src="css/imgs/men/remove/3.png" alt="Product Image">
                    <div class="colors">
                        <a class="black" onclick="changeColor('img3', '3.png')"></a>
                        <a class="blue"  onclick="changeColor('img3', '3blue.png')"></a>
                        <a class="brown" onclick="changeColor('img3', '3brown.png')"></a>
                    </div>
                    
                    <form action="addToCartMen.php" method="post">
                        <input name="nameGlass" class="product-name" type="text" value="Glass 3" readonly><p>
                        <input name="priceGlass" class="product-price" type="text" value="$500.00" readonly><p>
                        <button id="btn3" class="add-to-cart-button">Add to Cart</button>
                       
                    </form>
                      
                </div>

                <div class="card">
                    <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                    <img id="img4" class="product-image" src="css/imgs/men/remove/4.png" alt="Product Image">
                    <div class="colors">
                        <a class="black" onclick="changeColor('img4', '4.png')"></a>
                        <a class="blue"  onclick="changeColor('img4', '4blue.png')"></a>
                        <a class="brown" onclick="changeColor('img4', '4brown.png')"></a>
                    </div>
                    <form action="addToCartMen.php" method="post">
                        <input name="nameGlass" class="product-name" type="text" value="Glass 4" readonly><p>
                        <input name="priceGlass" class="product-price" type="text" value="$19.99" readonly><p>
                        <button id="btn4" class="add-to-cart-button">Add to Cart</button><p>
                        
                    </form>
                   
                      
                </div>

               

                <div class="card">
                    <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                    <img id="img5" class="product-image" src="css/imgs/men/remove/5.png" alt="Product Image">
                    <div class="colors">
                        <a class="black" onclick="changeColor('img5', '5.png')"></a>
                        <a class="blue"  onclick="changeColor('img5', '5blue.png')"></a>
                        <a class="brown" onclick="changeColor('img5', '5brown.png')"></a>
                    </div>
                    <form action="addToCartMen.php" method="post">
                        <input name="nameGlass" class="product-name" type="text" value="Glass 5" readonly><p>
                        <input name="priceGlass" class="product-price" type="text" value="$199.99" readonly><p>
                        <button id="btn5" class="add-to-cart-button">Add to Cart</button>
                        
                    </form>
                   
                      
                </div>

                <div class="card">
                    <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                    <img id="img6" class="product-image" src="css/imgs/men/remove/6.png" alt="Product Image">
                    <div class="colors">
                        <a class="black" onclick="changeColor('img6', '6.png')"></a>
                        <a class="blue"  onclick="changeColor('img6', '6blue.png')"></a>
                        <a class="brown" onclick="changeColor('img6', '6brown.png')"></a>
                    </div>
                    <form action="addToCartMen.php" method="post">
                        <input name="nameGlass" class="product-name" type="text" value="Glass 6" readonly><p>
                        <input name="priceGlass" class="product-price" type="text" value="$50.99" readonly><p>
                        <button id="btn6" class="add-to-cart-button">Add to Cart</button>
                       
                    </form>
                    
                      
                </div>

                <div class="card hide">
                    <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                    <img id="img7" class="product-image" src="css/imgs/men/remove/7.png" alt="Product Image">
                    <div class="colors">
                        <a class="black" onclick="changeColor('img7', '7.png')"></a>
                        <a class="blue"  onclick="changeColor('img7', '7blue.png')"></a>
                        <a class="brown" onclick="changeColor('img7', '7brown.png')"></a>
                    </div>
                    <form action="addToCartMen.php" method="post">
                        <input name="nameGlass" class="product-name" type="text" value="Glass 7" readonly><p>
                        <input name="priceGlass" class="product-price" type="text" value="$200" readonly><p>
                        <button  id="btn7" class="add-to-cart-button">Add to Cart</button>
                        
                    </form>
                   
                      
                </div>

                <div class="card hide">
                    <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                    <img id="img8" class="product-image" src="css/imgs/men/remove/8.png" alt="Product Image">
                    <div class="colors">
                        <a class="black" onclick="changeColor('img8', '8.png')"></a>
                        <a class="blue"  onclick="changeColor('img8', '8blue.png')"></a>
                        <a class="brown" onclick="changeColor('img8', '8brown.png')"></a>
                    </div>
                   
                                                         
                    <form action="addToCartMen.php" method="post">
                        <input name="nameGlass" class="product-name" type="text" value="Glass 8" readonly><p>
                        <input name="priceGlass" class="product-price" type="text" value="$199.99" readonly><p>
                        <button id="btn8" class="add-to-cart-button">Add to Cart</button>
                       
                    </form>
                    
                      
                </div>

                <div class="card hide">
                    <!-- Include images for some Items (e.g. goods) that available on the Business. -->
                    <img id="img9" class="product-image" src="css/imgs/men/remove/9.png" alt="Product Image">
                    <div class="colors">
                        <a class="black" onclick="changeColor('img9', '9.png')"></a>
                        <a class="blue"  onclick="changeColor('img9', '9blue.png')"></a>
                        <a class="brown" onclick="changeColor('img9', '9brown.png')"></a>
                    </div>
                    <form action="addToCartMen.php" method="post">
                        <input name="nameGlass" class="product-name" type="text" value="Glass 9" readonly><p>
                        <input name="priceGlass" class="product-price" type="text" value="$1000.00" readonly><p>
                        <button id="btn9" class="add-to-cart-button">Add to Cart</button>
                        
                    </form>
                      
                </div>
            </div>
        
            <button id="showSound" class="btnAdd" onclick="showAll()">View more Glasses</button>
            <!-- Include Sounds and Video -->
            <audio id="show">
                            <source src="audio/click2.mp3" type="audio/mp3">
                            Your browser does not support the audio element.
            </audio>
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
                    <p>Eye Glass  &copy; 2024</p>
                </div>
            </footer>
            <script src="js/menjs.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location: log_in.php");
    exit();
}
?>