<?php
    $host = "127.0.0.1:3307";
    $user = "csp";
    $pass = "1234";
    $db = "rev";

    $conn = mysqli_connect($host, $user, $pass, $db)
    
    if(!conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT revstr FROM rev";
    $result = mysqli_query($conn, $sql);
 ?>
