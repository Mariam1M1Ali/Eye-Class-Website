<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Use external CSS and JS files to add additional features to the HTML tags. -->
    <link rel="stylesheet" href="css/carttcss.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <!--  Use suitable title for each page -->
    <title>The Cart Page</title>
</head>

<body>

    <?php
        session_start();
        include("db_conc.php");
        $sql = "SELECT glassName, glassPrice, COUNT(*) 'Number of Glasses' FROM carts GROUP BY glassName;";
        $res = $conn->query($sql);

    ?>

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

                <h3> <?php echo  $_SESSION['name'] ?> </h3>

            </div>
        </div>

        <div class="tableContainer">
            <!-- Insert and format tables. -->
            <table>
                <caption>Cart Shop :-</caption>
                <tr>
                    <th>Glass Name</th>
                    <th>Glass Price</th>
                    <th>Number Of Glasses</th>
                </tr>
                <?php
                    while ($row = $res->fetch_assoc()) 
                    {
                ?>
                <tr>
                    <td><?php echo $row['glassName']; ?></td>
                    <td><?php echo $row['glassPrice']; ?></td>
                    <td><?php echo $row['Number of Glasses']; ?></td>
                </tr>

                <?php
                    }
                ?>
            </table>
        </div>

        <div class="delete">
            <form action="deleteAll.php" method="post">
                <button id="deleteAll">DELETE ALL</button>
            </form>
        </div>

        <div class="menOrWomen">

            <div class="olContainer">
                <p class="menOl">Men Sunglasses </p>
                <!-- List appear properly (for example, items names and price for each device as Ordered/Unordered list) -->
                <ol>
                    <li>Glass 1 : $199.99</li>
                    <li>Glass 2 : $299.99</li>
                    <li>Glass 3 : $500.00</li>
                    <li>Glass 4 : $19.99</li>
                    <li>Glass 5 : $199.99</li>
                    <li>Glass 6 : $50.99</li>
                    <li>Glass 7 : $200</li>
                    <li>Glass 8 : $199.99</li>
                    <li>Glass 9 : $1000.00</li>
                </ol>
            </div>
            <div class="olContainer">
                <p class="womenOl">Women Sunglasses </p>
                 <!-- List appear properly (for example, items names and price for each device as Ordered/Unordered list) -->
                <ol>
                    <li>Gucci 1 : $1000.00</li>
                    <li>Gucci 2 : $50.00</li>
                    <li>Gucci 3 : $99.99</li>
                    <li>Gucci 4 : $500.00</li>
                    <li>Gucci 5 : $100.00</li>
                    <li>Gucci 6 : $200.00</li>
                </ol>
            </div>
        </div>

        <div class="clear"></div>

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
    <?php $conn->close(); // Close connection 
    ?>
</body>

</html>