<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "adopcionanimales";

    // Create connection
    $conn = mysqli_connect($server, $user, $pass, $db);

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

?>
