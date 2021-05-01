<DOCTYPE html>
<?php
session_start();
include './connection.php'
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Manage Profile</title>
        <meta name="description" content="our restaurant">
        <link rel="stylesheet" href="includes/OFO.css">
        <link rel="icon" href="images/Ramen.png">
    </head>
    <body>

        <div class="wrapper">
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
                    <rect id="shape" height="40" width="150" />
                    <div id="text">
                        <a href="home.php"><span class="spot"></span>Home</a>
                    </div>
                    </svg>
                </div>
                <div class="svg-wrapper">
                    <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                    <rect id="shape" height="40" width="150" />
                    <div id="text">
                        <a href="menu.php"><span class="spot"></span>Menu</a>
                    </div>
                    </svg>
                </div>
                <div class="svg-wrapper">
                    <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                    <rect id="shape" height="40" width="150" />
                    <div id="text">
                        <a href="offers.php"><span class="spot"></span>Offers</a>
                    </div>
                    </svg>
                </div>
                <div class="svg-wrapper">
                    <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                    <rect id="shape" height="40" width="150" />
                    <div id="text">
                        <a href="Weekly-Special.php"><span class="spot"></span>Weekly-Special</a>
                    </div>
                    </svg>
                </div>
                <div class="svg-wrapper">
                    <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                    <rect id="shape" height="40" width="150" />
                    <div id="text">
                        <a href="Contact.php"><span class="spot"></span>Contact</a>
                    </div>
                    </svg>
                </div>
                <div class="svg-wrapper">
                    <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                    <rect id="shape" height="40" width="150" />
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
            <aside class="aside1"></aside>
            <article class="main"> 
                <div class="Register_From">
                    <div>
                        <img src="images/Profileimg.png" class="profimg"> <br>
                    </div>
                    <hr>
                    <br>
                    <div class="profilecard">
                        <div>
                            <form method="post" id="submitForm"  action="mange_form.php">
                                <all>
                                    <left>
                                        <label for="name" class="text">Username</label><br>
                                            <input type="text" id="UesrName3" name= "username" class="input_box" value="<?php echo$_SESSION['username']; ?>" disabled> 
                                        <span id='ErrorUsername' class="text"></span>
                                        <br><br>

                                        <label for="Email" class="text">Email</label> <br>
                                            <input type="text" id="Email1" name= "email" class="input_box" value="<?php echo$_SESSION['email']; ?>" disabled  pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" required>
                                        <span id='ErrorMail' class="text"></span>
                                        <br><br>

                                        <label for="passwrod" class="text">Password</label> <br>
                                            <input type="password" id="Password1" name="password" class="input_box" value="<?php echo$_SESSION['password']; ?>" disabled pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-_]).{8,}$" required>
                                        <span id='ErrorPassword1' class="text"></span>
                                        <br><br>
                                        <input class="subbtn" type="button" value="Edit/Cancel" onclick="Edit()"/>
                                        <br>
                                    </left>
                                    <right>
                                        <label for="name" class="text">Address</label><br>
                                            <input type="text" id="Address" name="address" class="input_box" value="<?php echo$_SESSION['address']; ?>" disabled required="">
                                        <span id='ErrorUsername' class="text"></span>
                                        <br><br>

                                        <label for="Email" class="text">Phone Number</label> <br>
                                            <input type="text" id="PhoneNo" name="phone" class="input_box" value="<?php echo$_SESSION['phone']; ?>" disabled pattern="^\d{11}$" required>
                                        <span id='ErrorPhone' class="text"></span>
                                        <br><br>

                                        <label for="passwrod" class="text">Credit Card Numbers</label> <br>
                                        <input type="text" id="RePassword" name="credit" class="input_box" value="<?php echo$_SESSION['credit-card']; ?>" disabled pattern="^\d{16}$" required>
                                        <span id='ErrorPassword2' class="text"></span>
                                        <br><br>
                                        <input class="subbtn" type="submit" name="sub_profile" value="Save Changes" onclick="SaveChanges()"/>
                                        <br>
                                    </right>
                                </all>
                            </form>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
           <!--     <input class="subbtn" type="button" value="Cancel" onclick="CancelEdting()"/>-->
            </article>
            <aside class="aside2"></aside>

            <?php
            include './includes/footer.php';
            ?>