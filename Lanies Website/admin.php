<?php require "includes/admin.inc.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lanie's Admin</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/footer.css">
    <script defer src="js_scripts/admin_validation.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.inc.php';?>
    <div class="content">
        <div class="container">
            <div class="add-products">
                <?php 
                    if(isset($_GET['updateMenuProductId']) || isset($_GET['updateOrderedId'])) {
                        echo "<h1>Update Product</h1>";
                    } else {
                        echo "<h1>Add Product</h1>";
                    }
                ?>
                <form id="form" action="" method="post" enctype="multipart/form-data">
                    <p>Product image</p>
                    <div id="choose-file">
                        <input type="file" name="upload" id="upload" class="file_btn"/> 
                    </div>
                    <p>Product name</p>
                    <input type="text" name="product_name" id="product_name" value="<?php echo $update_name?>">
                    <p>Product price</p>
                    <input type="text" name="product_price" id="product_price" value="<?php echo $update_price?>">
                    <p>Product quantity</p>
                    <input type="text" name="product_quantity" id="product_quantity" value="<?php echo $update_quantity?>">
                    <?php
                        if(!isset($_GET['updateOrderedId'])) {
                            echo '<p>Product description</p>';
                            echo '<input type="text" name="product_description" id="product_description" value="' . $update_description . '">';
                        }

                        if(isset($_GET['updateMenuProductId'])) {
                            echo '<input type="submit" name="updateMenuProducts" value="Update Product" class="add-product-btn">';
                        } else if(isset($_GET['updateOrderedId'])) {
                            echo '<input type="submit" name="updateOrderProducts" value="Update Product" class="add-product-btn">';
                        } else {
                            echo '<input type="submit" name="addProducts" value="Add Product" class="add-product-btn">';
                        }
                    ?>
                </form> 
                <?php 
                    if(isset($_GET['updateMenuProductId']) || isset($_GET['updateOrderedId'])) {
                        echo '<button onclick="location.href = \'admin.php\';" id="myButton" class="cancel-btn">Cancel</button>';
                    } 
                ?>
            </div>
            <div class="tables">
                <div class="user-registration">
                    <h1>Products</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Description</th>
                                <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            <?php 
                                if($menu_products) {
                                    while ($row = mysqli_fetch_array($menu_products)) {
                                        $id = $row['id'];
                                        $product_image = $row['product_image'];
                                        $product_name = $row['product_name'];
                                        $product_price = $row['product_price'];
                                        $product_quantity = $row['product_quantity'];
                                        $product_description = $row['product_description'];
        
                                        echo'
                                        <tr>
                                            <td> '.$id.' </td>
                                            <td> '.$product_image.' </td>
                                            <td> '.$product_name.' </td> 
                                            <td> '.$product_price.' </td> 
                                            <td> '.$product_quantity.' </td> 
                                            <td> '.$product_description.' </td> 
                                            <td>
                                                <a href="admin.php?updateMenuProductId='.$id.'" class="update_btn">Update</a>
                                            </td>
                                            <td>
                                                <a href="admin.php?delMenuProductId='.$id.'" class="del_btn">Delete</a>
                                            </td>
                                        </tr>';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="ordered-products">
                    <h1>Ordered Products</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if($ordered_products) {
                                    while ($row = mysqli_fetch_array($ordered_products)) {
                                        $id = $row['id'];
                                        $user_id = $row['user_id'];
                                        $product_image = $row['product_image'];
                                        $product_name = $row['product_name'];
                                        $product_price = $row['product_price'];
                                        $product_quantity = $row['product_quantity'];
        
                                        echo'
                                        <tr>
                                            <td> '.$id.' </td>
                                            <td> '.$user_id.' </td>
                                            <td> '.$product_image.' </td>
                                            <td> '.$product_name.' </td> 
                                            <td> '.$product_price.' </td> 
                                            <td> '.$product_quantity.' </td>
                                            <td>
                                                <a href="admin.php?updateOrderedId='.$id.'" class="update_btn">Update</a>
                                            </td>
                                            <td>
                                                <a href="admin.php?delOrderedId='.$id.'" class="del_btn">Delete</a>
                                            </td>
                                        </tr>';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
    <form action="" method="post">
        <input type="submit" name="restore" value="Restore Menu Products" class="restore-btn">
    </form>

    <!-- Footer -->
    <?php require 'includes/footer.inc.php';?>