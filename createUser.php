<?php
    session_start();
    $sname = "localhost";
    $uname = "root";
    $password = "";

    // $conn = new mysqli($sname, $uname ,$password);   
    // $sql = "CREATE DATABASE EyeGlass1";
    // $conn->query($sql);

    $dbname = "EyeGlass1";
    
    // $conn2 = new mysqli($sname, $uname ,$password, $dbname);

    // $sql = "CREATE TABLE users (
    //     id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     user_name VARCHAR(30),
    //     password VARCHAR(30),
    //     name VARCHAR(50)     -- user name that appear in the web site  
    // )";
    // $conn2->query($sql);

    // $conn3 = new mysqli($sname, $uname ,$password, $dbname);
    // $sql = "CREATE TABLE problems (
    //     uname VARCHAR(100),
    //     email VARCHAR(100),
    //     problem VARCHAR(100)
    // )";
    // $conn3->query($sql);

    // $conn4 = new mysqli($sname, $uname ,$password, $dbname);
    // $sql = "CREATE TABLE carts (
    //     glassName VARCHAR(100),
    //     glassPrice VARCHAR(100)
    // )";
    // $conn4->query($sql);


    $conn5 = new mysqli($sname, $uname ,$password, $dbname);
    $uname = $_POST["name"];

    $password = $_POST["password"];

    $user_name = $_POST["user_name"];

    $sql = "INSERT INTO users (user_name, password, name) VALUES ('$uname', '$password', '$user_name')";

    $conn5->query($sql);

    header("Location: log_in.php");
?>