<?php
include './includes/header.php';
?>
<body>
    <div class="wrapper0">
        <article class="main">
            <div class="container">
                <h3 style="text-align: center;">Contact Us</h3>
                <div class="row">
                    <div class="column">
                        <form id="submitForm" method="post" action="contactus_form.php" >
                            <label for="name" class="text" style="text-align: left">Name &emsp;&emsp;&emsp;</label> <span id='ErrorName'></span>
                            <input type="text" name="Name"  id="username0" placeholder="Your name" required pattern="^[A-Za-z ]+$" value="<?php
                            if (isset($_SESSION['user-id']) && !empty($_SESSION['user-id'])) {
                                echo $_SESSION['username'];
                            } else {
                                echo'';
                            }
                            ?>
                                   "<?php
                                   if (isset($_SESSION['user-id']) && !empty($_SESSION['user-id'])) {
                                       echo 'readonly';
                                   }
                                   ?>>

                            <label for="Email" class="text">Email &emsp;&emsp;&emsp;</label> <span id='ErrorEmail'></span>
                            <input type="text" name="Email"  id="email" placeholder="RamenIchiraku@example.com" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$"value="<?php
                            if (isset($_SESSION['user-id']) && !empty($_SESSION['user-id'])) {
                                echo $_SESSION['email'];
                            } else {
                                echo'';
                            }
                            ?>"<?php
                                   if (isset($_SESSION['user-id']) && !empty($_SESSION['user-id'])) {
                                       echo 'readonly';
                                   }
                                   ?>>

                            <label for="Mobile" class="text">Mobile &emsp;&emsp;&emsp;</label> <span id='ErrorMobile' ></span>
                            <input type="text"  name="Mobile" id="numbers" placeholder="Your Mobile" required pattern="^[0-9]\w{10}$" value="<?php
                            if (isset($_SESSION['user-id']) && !empty($_SESSION['user-id'])) {
                                echo $_SESSION['phone'];
                            } else {
                                echo'';
                            }
                            ?>">

                            <label for="Comment" class="text">Comment &emsp;&emsp;&emsp;</label> <span id='ErrorComment' ></span>
                            <textarea id="subject" name="subject" placeholder="Write your comments :D" style="height:200px" required></textarea>
                            <input class="sub" name="sub" type="submit" value="SUBMIT"  id="SubmitButton" onclick="validateForm()"/>
                        </form>
                    </div>
                </div>
            </div>
        </article>
        <aside class="aside2">
            <div class="column1">
                <img class="position" src="images/contact-us2.jpg" style="width:100%">
            </div>
        </aside>

        <?php
        include './includes/footer.php';
        ?>
