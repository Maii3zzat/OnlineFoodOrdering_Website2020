<?php
    error_reporting(0);
    $dbhost = 'localhost';  // localhost
    $user = 'root';   // database username
    $pass = '';    // database password
    $db = 'ofo_database';   // database name

    $conn = new mysqli($dbhost, $user, $pass, $db) or die("Unable to connect");
    // or die("") used to print error meg if the db connection failed
?>