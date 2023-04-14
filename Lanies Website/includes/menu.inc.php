<?php
    require 'connection.inc.php';
    require 'cartcount.inc.php';
    $sql = "SELECT * FROM `menu_products`";
    $result = mysqli_query($con, $sql);
    // echo error if not empty
    $error = "";
    //change cart count
    changeCartBubbleCount($con, $user_id);
    //fetch all the product details the add it to cart and change cart count
    if(isset($_POST['addCart']) && isset($_POST['product'])) {
        $productName = $_POST['product'];
        print_r($productName);
        $sql = "SELECT * FROM `menu_products` where product_name = '$productName'";
        $result = mysqli_query($con, $sql);
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
                $product_image = $row['product_image']; 
                $product_name = $row['product_name']; 
                $product_price = $row['product_price']; 
                $product_quantity = $row['product_quantity'];
                $product_status = "pending"; 
                addToCart($con, $user_id, $product_image, $product_name, $product_price, $product_quantity, $product_status);
                changeCartBubbleCount($con, $user_id);
            }
        }
    }
    //add to the products table, display an error if already added to cart
    function addToCart($con, $user_id, $product_image, $product_name, $product_price, $product_quantity, $product_status) {
        $sql = "SELECT * FROM `products` where product_name = '$product_name' AND user_id ='$user_id';";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);

        if($num < 1) {
            $sql = "INSERT INTO `products` (`id`, `user_id`, `product_image`, `product_name`, `product_price`, `product_quantity`, product_status) VALUES (NULL, '$user_id', '$product_image', '$product_name', '$product_price', '$product_quantity', '$product_status');";
            $result = mysqli_query($con, $sql);
            header("location: menu.php");
        } else {
            header("location: menu.php?error=$product_name");
        }
    }
    //if error is not empty then set the value to error
    if(isset($_GET['error'])) {
        $error = $_GET['error'];
    }
?>