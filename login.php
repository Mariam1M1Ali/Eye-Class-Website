<?php 
    session_start();
    include("db_conc.php");


    if (isset($_POST['uname']) && isset($_POST['password'])) {
       
        function validate($data){
            $data = trim($data);
            return $data;
        }

        $name = validate($_POST["uname"]);
        $pass = validate($_POST["password"]);

        if ( $name == "") {

            header("Location: log_in.php?error=user name is required");
            exit();

        }
        else if(empty($pass)) {
            header("Location: log_in.php?error=password is required");
            exit();
        }
        else
        {  
           $sql = "SELECT * From users WHERE user_name = '$name'  AND password = '$pass'";

           $res = $conn->query($sql);   

           if (mysqli_num_rows($res) === 1) 
           {
                $row = mysqli_fetch_assoc($res);

                if ($row['user_name'] === $name && $row['password'] === $pass) {

                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];

                    header("Location: index.php");
                    
                    exit();
                }
                else
                {
                    header("Location: log_in.php?error=Incorect user name or password");
                    exit();
                }
           }
        }
    }
    else{
        header("Location: log_in.php");
        exit();
    }