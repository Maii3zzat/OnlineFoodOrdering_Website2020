<?php

session_start();
include_once '../connection.php';
$new_question = $_POST['faq-question'];
$new_answer = $_POST['faq-answer'];


if (!$_POST['submit-edit']) {
    
} else {
    $sql = "UPDATE admin_faq SET question = '$new_question', answer = '$new_answer' WHERE faq_id = '$_SESSION[faqId]';";

    $result = mysqli_query($conn, $sql);

    header("Location: ./faq.php?");
    exit();
}   

