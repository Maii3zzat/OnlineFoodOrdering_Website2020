<?php
session_start();
include_once 'connection.php';
if (isset($_POST['login_submit'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    if (empty($username) || empty($password)) {
        header("Location: ./home.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE users_name =?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ./home.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $name_result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($name_result)) {
                if ($password == $row['users_password']) {
                    $pwdCheck = true;
                } else {
                    $pwdCheck = false;
                }
                if ($pwdCheck == false) {
                    header("Location: ./home.php?error=worngpwd");
                    exit();
                } else {
                    session_start();
                    $_SESSION['username'] = $row['users_name'];
                    $_SESSION['userAccess'] = $row['admin_access'];
                    $_SESSION['password'] = $row['users_password'];
                    $_SESSION['user-id'] = $row['users_id'];
                    $_SESSION['email'] = $row['users_email'];
                    $_SESSION['address'] = $row['users_address'];
                    $_SESSION['phone'] = $row['users_phone'];
                    $_SESSION['credit-card'] = $row['credit_card'];
                    if ($_SESSION['userAccess'] == 1) {
                        header("Location: ./Admin/menus.php?error=$_SESSION[userAccess]");
                        exit();
                    } else if ($_SESSION['userAccess'] == 0) {
                        header("Location: ./home.php?login=success");
                        exit();
                    }
                }
            } else {
                header("Location: ./home.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ./home.php");
    exit();
}
