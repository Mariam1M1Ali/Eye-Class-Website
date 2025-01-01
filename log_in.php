<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Use external CSS and JS files to add additional features to the HTML tags. -->
    <link rel="stylesheet" href="css/log.css">
    <!--  Use suitable title for each page -->
    <title>Login Page ! </title>
</head>

<body>
    <div class="card-container">
        <div class="container">
            <div class="log-card">
                <p class="heading">Welcome : </p>
                <h1>EYE GLASS</h1>
                <p class="txt">Protect Your Eyes in Style</p>

                <!-- Design a Form in one of the pages for entering data with validation -->
                <form action="login.php" method="post">
                    <div class="input-group">
                        <p class="text">Username :</p>
                        <input class="input" name="uname" type="username" placeholder="For Ex: Mido" onKeyPress="return checkIt(event)">
                        <p class="text">Password :</p>
                        <input class="input" type="password" name="password" placeholder="Enter Password" onKeyPress="return checkIt2(event)">
                    </div>
                    <button class="btn">Sign In</button>

                    <?php if (isset($_GET['error'])) {  ?>
                        <p class="error"> <?php echo  $_GET['error']; ?></p>
                    <?php
                     } 
                    ?>
                    <a href="signUp.php" class="signUp"> if you don't have an account ? <br><span>Sign Up</span></a>
                </form>

            </div>
        </div>
       
    </div>
    <!-- Use external CSS and JS files to add additional features to the HTML tags. -->
    <script src="js/logInUp.js"></script>
</body>

</html>