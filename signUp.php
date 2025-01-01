<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <!-- Use external CSS and JS files to add additional features to the HTML tags. -->
    <link rel="stylesheet" href="css/log.css">
    <!--  Use suitable title for each page -->
    <title>Sign Up Page ! </title>
</head>

<body>
    <div class="card-container">
        
            <div class="log-card">
                <p class="heading">Welcome : </p>
                <h1>EYE GLASS</h1>
                <p class="txt">Create Your Account</p>

                <!-- Design a Form in one of the pages for entering data with validation -->
                <form action="createUser.php" method="post">
                    <div class="input-group">
                        <p class="text">Name :</p>
                        <input class="input" name="name" type="username" placeholder="For Ex: Mido" onKeyPress="return checkIt(event)">
                        <p class="text">Password :</p>
                        <input class="input" type="password" name="password" placeholder="Enter Password" onKeyPress="return checkIt2(event)">
                        <p class="text">Username :</p>
                        <input class="input" name="user_name" type="username" placeholder="For Ex: Mido">
                    </div>

                    <button class="btn">Sign Up</button>
                   
                    <a href="log_in.php" class="signUp"> if you have an account ... <br><span>log In</span></a>
                </form>

            
        </div>
       
    </div>
    <!-- Use external CSS and JS files to add additional features to the HTML tags -->
    <script src="js/logInUp.js"></script>
</body>

</html>