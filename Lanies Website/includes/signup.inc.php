<?php
    require 'connection.inc.php';
    //if user click sign-up insert data to the table user registration
    //also it check if the user email has already taken
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["signup"])) {
            $firstname = $_POST["fname"];
            $lastname = $_POST["lname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            $sql = "SELECT * FROM `user_registration` where email = '$email';";
            $result = mysqli_query($con, $sql);
            $num = mysqli_num_rows($result);

            if($num == 1) {
                header("location: ../signup.php?error=email is already taken");
            } else {
                $reg = "INSERT INTO `user_registration` (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')"; 
                mysqli_query($con, $reg);
                header("location: ../signup.php?success=you have signed up successfully");
            }
        }

    }
    
?>