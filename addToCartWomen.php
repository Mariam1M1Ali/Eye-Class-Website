<?php
    session_start();

    include("db_conc.php");

    $name = $_POST["nameGlass"];

    $price = $_POST["priceGlass"];

    $sql = "INSERT INTO carts VALUES ('$name', '$price')";

    mysqli_query($conn,  $sql);   
    
    header("Location: women.php");
?>