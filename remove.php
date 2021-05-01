<?php
include './connection.php';
echo "hello";
$q = $_REQUEST["q"];

                            
            $sql = "SELECT * FROM cart WHERE name='$q';";
            $result = mysqli_query($conn, $sql);
            
            $row = mysqli_fetch_assoc($result);
            $sql="UPDATE cart  
            SET quantity = 0
            WHERE name='$q';";
            $conn->query($sql);
                        
?>