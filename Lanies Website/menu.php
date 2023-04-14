<?php require 'includes/menu.inc.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lanie's Menu</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <!-- Navbar -->
     <?php require 'includes/navbar.inc.php';?>

     <div class="content">
         <?php 
            if($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div>
                            <form action="" method="post">
                                <div class="menu-img"><img src="<?php echo $row['product_image'];?>" alt=""></div>
                                <div><h1><?php echo $row['product_name'];?></h1></div>
                                <div><h3>₱<?php echo $row['product_price'];?></h3></div>
                                <div>
                                    <p><?php echo $row['product_description'];?></p>
                                </div>
                                <input type="hidden" name="product" value="<?php echo $row['product_name'];?>">
                                <input type="submit" name="addCart" value="Add to Cart">
                                <div class="error">
                                    <?php 
                                        if($error === $row['product_name']) {
                                            echo "Already Added to Cart!";
                                        }
                                    ?>
                                </div>
                            </form>
                        </div>
            <?php
                }
            }
        ?>
    </div>

    <!-- Footer -->
    <?php require 'includes/footer.inc.php';?>