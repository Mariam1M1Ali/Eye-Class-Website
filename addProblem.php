<?php
    session_start();

    include("db_conc.php");

    $uname = $_POST["uname"];

    $email = $_POST["email"];

    $problem = $_POST["problem"];

    $sql = "INSERT INTO problems VALUES ('$uname', '$email', '$problem')";
    
    $conn->query($sql);

    header("Location: contact.php");