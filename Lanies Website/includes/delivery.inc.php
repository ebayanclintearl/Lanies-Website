<?php
    require 'connection.inc.php';
    require 'cartcount.inc.php';
    // for echo in the value fields
    $firstname = $lastname = $email = "";
    //fetch the user info
    if(isset($_SESSION["email"]) && isset($_SESSION["email"])) {
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
    //set the status to check_out from the user_id when click continue button
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['continue'])) {
            $sql="UPDATE `products` SET `product_status` = 'check_out' WHERE `products`.`user_id` = '$user_id';";
            $result = mysqli_query($con, $sql);
            header("location: cart.php");
        }
    }
?>