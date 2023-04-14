<?php
    require 'connection.inc.php';
    require 'includes/cartcount.inc.php';
    //change cart count
    changeCartBubbleCount($con, $user_id);
    // for echo in the value fields
    $firstname = $lastname = $email = $password = "";
    //get the value of variable above
    if(isset($_SESSION["email"]) && isset($_SESSION["password"])) {
        $email = $_SESSION["email"];
        $password = $_SESSION["password"];
        $sql = "SELECT * FROM `user_registration` where email = '$email' && password = '$password';";
        $result = mysqli_query($con, $sql);
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
            }
        }

    }
    //logout user
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["logout"])) {
            $_SESSION["email"] = "";
            $_SESSION["password"] = "";
            $_SESSION["login"] = false;
            header('location: login.php?logout=true');
        }

    }
?>