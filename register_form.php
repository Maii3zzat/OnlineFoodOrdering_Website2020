<?php

include_once './connection.php';

$sql1 = "SELECT MAX(users_id) FROM users; ";
$last_sec_result = mysqli_query($conn, $sql1);

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password1'];

if ($last_sec_result !== null) {
    $last_sec_value = mysqli_fetch_array($last_sec_result);
    $last_sec_value[0] ++;
    if (!$_POST['submit-register']) {
        
    } else {
        $SQL = "INSERT into users (users_id,users_name,users_email,users_password)
        values ('$last_sec_value[0]','$name','$email','$password')";
        mysqli_query($conn, $SQL);
        header("Location: ./home.php");
        exit();
    }
} else {
    echo $last_sec_result;
    echo "database query failed please check data you enter.";
}
?>