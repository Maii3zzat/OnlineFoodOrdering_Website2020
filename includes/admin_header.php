<?php
session_start();
include_once '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            <?php
            $page = ucwords(str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF'])));
            echo 'Admin - ' . $page;
            ?>
        </title>
        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <!-- Favicon Tag -->
        <link rel="icon" type="image/x-icon" href="../images/Ramen.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS -->
        <link href="../includes/bootstrap.min.css" rel="stylesheet">
        <link href="../includes/style.css" rel="stylesheet">
        <link href="../includes/material-icons/material-icons.css" rel="stylesheet">
    </head>
    <header><?php
        $page = ucwords(str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF'])));
        echo $page;
        ?>
        <form action="../logout_form.php">
            <label style="margin-left: 80%; margin-top: -1.5%"> Hello, 
            <?php echo $_SESSION['username'] ?> <button type="submit" class="btn"
                    style="margin-left: 20%;" > logout </button></label>
        </form>
    </header>

    <div class="adminpanel">

        <ul>

            <li><a title="" href="./menus.php"><i class="material-icons">restaurant</i> Menu</a></li>
            <li><a title="" href="./users.php"><i class="material-icons">people</i> Users</a></li>
            <li><a title="" href="./orders.php"><i class="material-icons">room_service</i> Orders<span id="orders-number"><?php
                        $sql = "SELECT MAX(order_id) FROM orderr;";
                        $max_num = mysqli_query($conn, $sql);
                        $max_num = mysqli_fetch_array($max_num);
                        echo $max_num[0];
                        ?></span></a></li>
            <li><a title="" href="./payments.php"><i class="material-icons">local_atm</i> Payments</a></li>
            <li><a title="" href="./messages.php"><i class="material-icons">mail</i> Messages<span id="messages-number"><?php
                        $sql = "SELECT MAX(contact_id) FROM contactus;";
                        $max_num = mysqli_query($conn, $sql);
                        $max_num = mysqli_fetch_array($max_num);
                        echo $max_num[0];
                        ?></span></a></li>
            <li><a title="" href="./faq.php"><i class="material-icons">question_answer</i> FAQ </a></li>
            <li><a title="" href="<?php
                   if ($_SESSION['userAccess'] == 1)
                       echo'../home.php';
                   else
                       echo '#';
                   ?>"><i class="material-icons">people</i> Client mode </a></li>
            <li>
                <!--<div id="UserInfo">

                    <form action="../logout_form.php">
                        <label for="name" ><?php echo $_SESSION['username'] ?> </label>
                        <button class="" type="submit" >logout</button>
                    </form>
                </div>-->
            </li>
        </ul>
    </div>
    ../home.php