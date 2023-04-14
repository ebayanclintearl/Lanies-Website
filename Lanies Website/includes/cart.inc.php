<?php
    require 'connection.inc.php';
    require 'cartcount.inc.php';
    //get the products from user id 
    $sql = "SELECT * FROM `products` where user_id ='$user_id';";
    $result = mysqli_query($con, $sql);
    //remove item from cart
    if(isset($_GET['remove'])) {
        removeItem($con, $_GET['remove']);
        changeCartBubbleCount($con, $user_id);
    }
    //update item from cart
    if(isset($_POST["update"])) {
        $field_array = [];
        for( $i=0 ; $i < count($_POST['quantity']); $i++ )
        {
            $id = $_POST['cartId'][$i];
            $quantity = $_POST['quantity'][$i];

            updateQuantity($con, $id, $quantity);
        }
        header("location: cart.php");
    }

    function removeItem($con, $id) {
        $sql = "DELETE FROM `products` WHERE id = $id;";
        mysqli_query($con, $sql);

        header("location: cart.php");
    }

    function updateQuantity($con, $id, $product_quantity) {
        $sql = "UPDATE `products` SET product_quantity = '$product_quantity' WHERE id = $id;";
        mysqli_query($con, $sql);
    }
    //go to delivery page
    if(isset($_POST["checkout"])) { 
        header("location: delivery.php");
    }
?>