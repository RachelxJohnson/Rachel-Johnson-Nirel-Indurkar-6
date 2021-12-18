<?php
    $host = "127.0.0.1:3307";
    $user = "root";
    $pass = "1234";
    $db = "rev";

    $conn = mysqli_connect($host, $user, $pass, $db)


    $sql = "SELECT revstr FROM rev";
    $result = mysqli_query($conn, $sql);
 ?>