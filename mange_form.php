<?php 
session_start();
include_once 'connection.php';
    $new_address = $_POST['address'];
    $new_email = $_POST['email'];
    $new_phone = $_POST['phone'];
    $new_password = $_POST['password'];
    $new_creditcard = $_POST['credit'];
if (!$_POST['sub_profile']) {
    
} else {
    
    $sql_new = "UPDATE users SET users_password = '$new_password', users_address = '$new_address',"
            . " users_email = '$new_email', users_phone = '$new_phone', credit_card = $new_creditcard WHERE users_id = ".$_SESSION['user-id']."; ";
    
    $result = mysqli_query($conn, $sql_new);
    $resultCheck = mysqli_num_rows($result);

    header("Location: ./ManageProfile.php");
    exit();
}   
