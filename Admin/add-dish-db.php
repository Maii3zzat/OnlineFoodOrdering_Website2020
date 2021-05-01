    <?php

include_once '../connection.php';

$sql1 = "SELECT MAX(dish_id) FROM dish; ";
$last_sec_result = mysqli_query($conn, $sql1);

$dishName = $_POST['dish-name'];
$dishPrice = $_POST["dish-price"];
$dishDescr = $_POST["dish-description"];
$dishImag = $_POST["image1"];
$dishOffer = $_POST["dish-offer"];



if ($last_sec_result !== null) {

    $last_sec_value = mysqli_fetch_array($last_sec_result);
    $last_sec_value[0] ++;
} else {
    echo $last_sec_result;
    echo "database query failed please check data you enter.";
}
if (!$_POST['submit_dish']) {
    
} else {
    $sql_add = "INSERT INTO dish (dish_id, name, price,decs,d_img,offer)"
             . "VALUES ('$last_sec_value[0]', '$dishName', '$dishPrice','$dishDescr','$dishImag','$dishOffer');";
    
    mysqli_query($conn, $sql_add);

    header("Location: ./menus.php");
    exit();
}