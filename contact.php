<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
    <!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <!--  Use suitable title for each page -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
        <!-- Use external CSS and JS files to add additional features to the HTML tags. -->
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/nav.css">
        <title>Contact Us</title>
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
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">El-Minia</div>
                        <div class="text-two">El-Minia City</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">01126121268</div>
                        <div class="text-two">01154126873</div>
                        <div class="text-two">01064846018</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <a href="mailto:zyaddhassann@gmail.com">
                            <div class="text-one">zyaddhassann@gmail.com</div>
                        </a>
                        <a href="mailto:ahhmedhesham@gmail.com">
                            <div class="text-two">ahhmedhesham@gmail.com</div>
                        </a>
                        <a href="mailto:10mariammohamed10@gmail.com">
                            <div class="text-two">10mariammohamed10@gmail.com</div>
                        </a>

                        <a href="mailto:emadhtita@gmail.com">
                            <div class="text-two">emadhtita@gmail.com</div>
                        </a>
                    </div>
                </div>
                <div class="right-side">

                    <div class="topic-text">Send us a message</div>
                    <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>

                    <!-- Design a Form in one of the pages for entering data with validation -->
                    <form action="addProblem.php" method="post">
                        <div class="input-box">
                            <input name="uname" type="text" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <input name="email" type="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box message-box">
                            <textarea required name="problem"  id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="button">
                            <button id="btn">Sent</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location: log_in.php");
    exit();
}
?>