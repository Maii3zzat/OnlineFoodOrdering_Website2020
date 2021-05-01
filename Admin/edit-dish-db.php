<?php

session_start();
include_once '../connection.php';
$new_name = $_POST['dish-name'];
$new_price = $_POST['dish-price'];
$new_desc = $_POST['dish-description'];
$new_offer = $_POST['dish-offer'];
$new_img = $_POST['image1'];

if (!$_POST['submit-edit']) {
    
} else {
    $sql = "UPDATE dish SET name = '$new_name', price = '$new_price', decs = '$new_desc', d_img = '$new_img', offer = '$new_offer' WHERE dish_id = '$_SESSION[id]';";

    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);


    header("Location: ./menus.php");
    exit();
}   

