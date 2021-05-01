<?php
session_start();
include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?php
            $page = ucwords(str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF'])));
            echo $page;
            ?>
        </title>
        <meta name="description" content="our restaurant">
        <link rel="stylesheet" href="includes/OFO.css">
        <link rel="icon" href="includes/images/Ramen.png">
    <div class="wrapper">
        <div class="header"> 
            <div>
                <a href="home.php"> <img src="images/RamenW.png" alt="Ramen logo" class="logo" > </a>
                <h1 class="storename">ラーメン一楽! </h1>
            </div>
            <div class="loginDM">
                <ul>
                    <li id="login">
                        <?php
                        if (!isset($_SESSION['user-id'])) {
                            echo' <a id="login-trigger" href="#">
                                    Log in <span>▼</span>
                                </a>';
                        } else {
                            echo' <a id="login-trigger" href="#">
                                    Log out <span>▼</span>
                                </a>';
                        }
                        ?>

                        <div id="login-content">
                            <?php
                            if (!isset($_SESSION['user-id'])) {
                                echo '<form method="post" action="login_form.php">
                                <fieldset id="inputs">
                                    <input  id="username"
                                            type="username"
                                            name="Username"
                                            placeholder="Your username"
                                            required>
                                    <input  id="password"
                                            type="password"
                                            name="Password"
                                            placeholder="Password"
                                            required>
                                </fieldset>
                                <fieldset id="actions">
                                    <input  type="submit"
                                            id="submit"
                                            name="login_submit"
                                            value="Log in">
                                    <label>
                                        <input  type="checkbox"
                                                checked="checked">
                                        Keep me signed in
                                    </label>
                                </fieldset>
                            </form>';
                            } else {
                                echo '<br><labelText for="name">Hello, ' . $_SESSION['username'] . '!</labelText><br><br>';
                                echo '<form action = "logout_form.php" method="post">
                                <input style="margin-left: 30%" type="submit"
                                            id="submit"
                                            name="logout_submit"
                                            value="Log out">
                            </form>';
                            }
                            ?>

                        </div>
                    </li>
                    <?php
                    if (!isset($_SESSION['user-id'])) {
                        echo '<li id="signup">
                                <a href="register.php">Register</a>
                             </li>';
                    } else {
                        echo '<li id="signup">
                                <a href="manageprofile.php">Manage profile</a>
                             </li>';
                    }
                    ?>

                </ul>
            </div>
        </div> 
        <nav class="navBar">
            <div class="svg-wrapper">
                <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                <rect id="<?php
                    if ($page === 'Home')
                        echo 'shapeactive';
                    else
                        echo 'shape';
                    ?>" height="40" width="150" />
                <div id="text">
                    <a href="home.php"><span class="spot"></span>Home</a>
                </div>
                </svg>
            </div>
            <div class="svg-wrapper">
                <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                <rect id="<?php
                if ($page === 'Menu')
                    echo 'shapeactive';
                else
                    echo 'shape';
                    ?>" height="40" width="150" />
                <div id="text">
                    <a href="menu.php"><span class="spot"></span>Menu</a>
                </div>
                </svg>
            </div>
            <div class="svg-wrapper">
                <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                <rect id="<?php
                if ($page === 'Offers') {
                    echo 'shapeactive';
                } else
                    echo 'shape'
                        ?>" height="40" width="150" />
                <div id="text">
                    <a href="offers.php"><span class="spot"></span>Offers</a>
                </div>
                </svg>
            </div>
            <div class="svg-wrapper">
                <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                <rect id="<?php
            if ($page === 'Weekly Special') {
                echo 'shapeactive';
            } else
                echo 'shape'
                        ?>" height="40" width="150" />
                <div id="text">
                    <a href="Weekly-Special.php"><span class="spot"></span>Weekly-Special</a>
                </div>
                </svg>
            </div>
            <div class="svg-wrapper">
                <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                <rect id="<?php
            if ($page === 'Contact') {
                echo 'shapeactive';
            } else
                echo 'shape'
                        ?>" height="40" width="150" />
                <div id="text">
                    <a href="Contact.php"><span class="spot"></span>Contact</a>
                </div>
                </svg>
            </div>
            <div class="svg-wrapper">
                <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                <rect id="<?php
            if ($page === 'FAQ') {
                echo 'shapeactive';
            } else
                echo 'shape'
                        ?>" height="40" width="150" />
                <div id="text">
                    <a href="FAQ.php"><span class="spot"></span>FAQ</a>
                </div>
            </div>
            <div class="svg-wrapper">
                <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg" >
                <rect id="<?php
                if ($page === 'Admin') {
                    echo 'shapeactive';
                } else
                    echo 'shape'
                    ?>" height="40" width="150" />
                <div id="text">
                    <a href="<?php
                    if($_SESSION['userAccess'] == 1)
                        echo'Admin/menus.php';
                    else 
                        echo '#';
                    ?>"  ><span class="spot" ></span>Admin</a> 
                </div>
                </svg>
            </div>
        </nav>
    </head>
