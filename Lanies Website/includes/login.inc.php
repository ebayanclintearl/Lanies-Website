<?php
    require 'connection.inc.php';
    session_start();
    // if user has registered set the email and password to session
    // otherwise display error
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;

            $sql = "SELECT * FROM `user_registration` where email = '$email' && password = '$password';";
            $result = mysqli_query($con, $sql);
            $num = mysqli_num_rows($result);

            if($num == 1) {
                header('location: ../account.php');
                $_SESSION["login"] = true;
            } else {
                header('location: ../login.php?error=Incorrect email or password');
                $_SESSION["email"] = "";
                $_SESSION["password"] = "";
            }
        }

    }
    
?>