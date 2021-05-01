<?php
session_start();
include_once '../connection.php';
$ques = $_POST['question'];
$answ = $_POST["answer"];

if (!$_POST['sub_faq']) {
    
} else {
    $sql = "INSERT INTO `admin_faq` (`faq_id`,`users_id`,`question`, `answer`) VALUES (NULL,".$_SESSION['user-id'].",'$ques', '$answ');";
    mysqli_query($conn, $sql);

    header("Location: ./faq.php");
    exit();
}
?>

