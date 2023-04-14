<?php 
    session_start();
    //set user id when not registered
    $user_id = "un_reg";
    //get the user id
    if(isset($_SESSION["email"]) && isset($_SESSION["password"])) {
        $email = $_SESSION["email"];
        $password = $_SESSION["password"];
        $sql = "SELECT * FROM `user_registration` where email = '$email' && password = '$password';";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1) {
            while ($row = mysqli_fetch_array($result)) {
                $user_id = $row['id'];;
            }
        }
    }
    //check if user id is not empty then set the user id
    if($user_id !== "") {
        $_SESSION['user_id'] = $user_id;
    }
    //change cart count
    function changeCartBubbleCount($con, $user_id) {
        $sql = "SELECT * FROM `products` where user_id = '$user_id';";
        $result = mysqli_query($con, $sql);
        $rowcount = mysqli_num_rows($result);
        $_SESSION['cartBubbleCount'] = $rowcount;
    }
?>