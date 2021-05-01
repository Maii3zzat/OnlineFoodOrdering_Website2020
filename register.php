<!DOCTYPE html>
<?php
include_once './connection.php';
include './register_form.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register</title>
        <meta name="description" content="our restaurant">
        <link rel="stylesheet" href="includes/OFO.css">
        <link rel="icon" href="images/Ramen.png">
    </head>
    <body class="home" onload="register_form()">
        <div class="header"> 
            <div>
                <a href="homepage.php"> <img src="images/RamenW.png" alt="Ramen logo" class="logo"> </a>
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
                                echo '<br><labelText for="name">Hello, ' . $_SESSION['username01'] . '!</labelText><br><br>';
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
        <div class="Register_From1" >
            <h2> REGISTER NOW </h2>
            <hr>
            <br>

            <form action="register.php" method="post" id="submitForm">
                <span>
                    <label for="name" class="text">Username</label><br>
                    <input type="text" name="username" id="Username" class="input_box" placeholder="Enter your name" >
                    <error></error>
                    <br><br>
                </span>
                <span>
                    <label for="Email" class="text">Email</label> <br>
                    <input type="text" name="email" id="Email" class="input_box" placeholder="Email" >
                    <error></error>
                    <br><br>
                </span>
                <span>
                    <label for="passwrod" class="text">Password</label> <br>
                    <input type="password" name="password1" id="Password" class="input_box" placeholder="password" >
                    <error></error>
                    <br><br>
                </span>
                <span>
                    <label for="re-enter" class="text">Re-enter your password</label><br>
                    <input type="password" name="password2" id="Password2" class="input_box" placeholder="password" >
                    <error></error>
                    <br><br>
                </span>
                <hr>

                <button class="sub" name="submit-register" value="REGISTER" >REGISTER</button>
                <br>
            </form>


        </div>
        <?php
        include './includes/footer.php';
        ?>
