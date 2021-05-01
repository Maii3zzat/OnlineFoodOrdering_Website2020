<?php
include './connection.php';
$q = $_REQUEST["q"];

$sql = "SELECT * FROM cart WHERE name='$q';";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);
            $sql="INSERT INTO payment (users_id, pay_date )
            VALUES (q,'date')";
            $conn->query($sql);
                        
?>
