<?php 

    $sname = "localhost";
    $uname = "root";
    $password = "";

    $db_name = "EyeGlass1";

    $conn = new mysqli($sname, $uname ,$password, $db_name);

    if (!$conn) {
        echo "Connect Failed!";
    }