<?php
    require 'connection.inc.php';
    require 'cartcount.inc.php';
    $sql = "SELECT * FROM `menu_products`";
    $menu_products = mysqli_query($con, $sql);
    $sql = "SELECT * FROM `products` where product_status = 'check_out'";
    $ordered_products = mysqli_query($con, $sql);
    changeCartBubbleCount($con, $user_id);
    // for echo in the value fields
    $update_name = $update_price = $update_quantity = $update_description = "";
    //add
    if (isset($_POST['addProducts'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_quantity = $_POST['product_quantity'];
        $product_description = $_POST['product_description'];
        $img_path = fileUpload();
        insertProducts($con, $img_path, $product_name, $product_price, $product_quantity, $product_description);
    }
    //update menu products
    if(isset($_GET['updateMenuProductId'])) {
        $id = $_GET['updateMenuProductId'];
        $sql="SELECT * FROM `menu_products` where id=$id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $update_name = $row['product_name'];
        $update_price = $row['product_price'];
        $update_quantity = $row['product_quantity'];
        $update_description = $row['product_description'];
        
        if(isset($_POST['updateMenuProducts'])) {
            $id = $_GET['updateMenuProductId'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_quantity = $_POST['product_quantity'];
            $product_description = $_POST['product_description'];
            $img_path = fileUpload();
            updateData($con, $id, $img_path, $product_name, $product_price, $product_quantity, $product_description);
        }
    }
    //update ordered products
    if(isset($_GET['updateOrderedId'])) {
        $id = $_GET['updateOrderedId'];
        $sql="SELECT * FROM `products` where id=$id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $update_name = $row['product_name'];
        $update_price = $row['product_price'];
        $update_quantity = $row['product_quantity'];

        if(isset($_POST['updateOrderProducts'])) {
            $id = $_GET['updateOrderedId'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_quantity = $_POST['product_quantity'];
            $product_description = "";
            $img_path = fileUpload();
            updateData($con, $id, $img_path, $product_name, $product_price, $product_quantity, $product_description);
        }
    }
    // use to update data in the table
    function updateData($con, $id, $img_path, $product_name, $product_price, $product_quantity, $product_description) {
        if($product_description === "" && $img_path === null) { //update ordered products w/o updating img
            $sql = "UPDATE `products` SET 
            product_name = '$product_name',
            product_price = '$product_price', 
            product_quantity = '$product_quantity'
            WHERE id=$id";
            $result = mysqli_query($con, $sql);
        } else if($product_description === "") { //update ordered products
            $sql = "UPDATE `products` SET 
            product_image = '$img_path',
            product_name = '$product_name',
            product_price = '$product_price', 
            product_quantity = '$product_quantity'
            WHERE id=$id";
            $result = mysqli_query($con, $sql);
        } else if($product_description !== "" && $img_path === null) { //update menu products w/o updating img
            $sql = "UPDATE `menu_products` SET 
            product_name = '$product_name',
            product_price = '$product_price', 
            product_quantity = '$product_quantity',
            product_description = '$product_description' 
            WHERE id=$id";
            $result = mysqli_query($con, $sql);
        } else { // update menu products
            $sql = "UPDATE `menu_products` SET 
            product_image = '$img_path',
            product_name = '$product_name',
            product_price = '$product_price', 
            product_quantity = '$product_quantity',
            product_description = '$product_description' 
            WHERE id=$id";
            $result = mysqli_query($con, $sql);
        }

        if($result) {
            header('location: admin.php');
        } else {
            die(mysqli_error($con));
        }
    }
    //delete menu_products table
    if(isset($_GET['delMenuProductId'])) {
        $id = $_GET['delMenuProductId'];
        $sql = "DELETE FROM `menu_products` WHERE id= $id"; 
        $result = mysqli_query($con, $sql); 
        if($result) {
            header('location: admin.php');
        } else {
            die(mysqli_error($con));
        }
    }
    //delete products table
    if(isset($_GET['delOrderedId'])) {
        $id = $_GET['delOrderedId'];
        $sql = "DELETE FROM `products` WHERE id= $id"; 
        $result = mysqli_query($con, $sql); 
        if($result) {
            header('location: admin.php');
        } else {
            die(mysqli_error($con));
        }
    }
    //restore
    if(isset($_POST['restore'])) {
        $database->restoreMenuProducts();
        header("location: admin.php");
    }
    //for adding menu products
    function insertProducts($con,$img_path, $product_name, $product_price, $product_quantity, $product_description) {
        $sql = "INSERT IGNORE INTO `menu_products` (`id`, `product_image`, `product_name`, `product_price`, `product_quantity`, `product_description`) 
        VALUES (NULL, '$img_path', '$product_name', '$product_price', '$product_quantity', '$product_description');";
        mysqli_query($con, $sql);
        header("location: admin.php");
    }
    //for img upload
    function fileUpload() {
        if(isset($_FILES['upload'])){
            $errors= array();
            $file_name = $_FILES['upload']['name'];
            //$file_size =$_FILES['upload']['size'];
            $file_tmp =$_FILES['upload']['tmp_name'];
            //$file_type=$_FILES['upload']['type'];
            $tmp = explode('.', $file_name);
            $file_extension = end($tmp);
            $file_ext= strtolower($file_extension);
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
                array_push($errors, "extension not allowed, please choose a JPG, JPEG or PNG file.");
            }
            
            if(empty($errors)==true){
                $folder_dir = "uploads/";
                $newFileName = uniqid('menu_', true).".".$file_ext;
                move_uploaded_file($file_tmp,$folder_dir.$newFileName);
                return $folder_dir.$newFileName;
            }else{
                print_r($errors);
            }
         }
    }
?>