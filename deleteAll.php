<?php
    session_start();

    include("db_conc.php");

    $sql = "DELETE FROM carts";
    
    mysqli_query($conn,  $sql); 

    header("Location: cart.php");
    
?>