
<?php
include './connection.php';
echo "hello";
$q = $_REQUEST["q"];
                        $sql = "SELECT * FROM cart WHERE name='$q';";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        
                        if ($resultCheck == null)
                        {
                            $sql = "SELECT * FROM dish WHERE name='$q';";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                            while($row = mysqli_fetch_assoc($result)) 
                         {   $name=$row['name'];
                             $price=$row['price'];
                             
                             $sql = "INSERT INTO cart (name, price, quantity)
                                VALUES ('$name', $price, 1)";
                             $conn->query($sql);
                         }
                        }
        else
        {   
            $sql = "SELECT * FROM cart WHERE name='$q';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            while($row = mysqli_fetch_assoc($result)) 
                { $quantity=$row['quantity']; }
            $quantity=$quantity+1;
            $sql="UPDATE cart  
            SET quantity = $quantity
            WHERE name='$q';";
            $conn->query($sql);
        }
       


?>

