<?php
    require 'connection.inc.php';
    session_start();
    // for echo in the value fields
    $firstname = $lastname = $email = "";
    //fetch the user info
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
?>