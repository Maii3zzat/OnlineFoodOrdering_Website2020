<?php

//error_reporting(0);
session_start();
include_once './connection.php';
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Mobile'];
$comment = $_POST['subject'];

if (!$_POST['sub']) {
    
} else {
    $SQL = "INSERT into contactus (users_id,contact_name,email,mobile,comment)
    values (".$_SESSION['user-id'].",'$name','$email','$phone','$comment')";
    mysqli_query($conn, $SQL);
    
    header("Location: ./home.php?$name");
    exit();
}
?>