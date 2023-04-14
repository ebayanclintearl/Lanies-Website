<?php require 'includes/cart.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lanie's Cart</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/footer.css">
    <script defer src="js_scripts/cart.js"></script>
</head>
<body>
    <!-- Navbar -->
     <?php require 'includes/navbar.inc.php';?>
    <div class="content">
        <div class="cart-headline">
            <h1>Your Cart</h1>
            <a href="menu.php">Continue Shopping</a>
        </div>

        <form action="" method="post">
        <table class="cart-table">
            <thead>
                <tr>
                    <th colspan="2">Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                                <tr>
                                    <td><img src="<?php echo $row['product_image'];?>" alt=""></td>
                                    <td><h2><?php echo $row['product_name'];?></h2><a href="cart.php?remove=<?php echo $row['id']?>">Remove</a></td>
                                    <td class="price">₱<?php echo $row['product_price'];?></td>
                                    <td align="center" class="quantity">
                                        <input type="number" name="quantity[]" value="<?php echo $row['product_quantity']?>" max="20" min="1" id="quantityInput" onclick="updateCartTotal();">
                                        <input type="hidden" name="cartId[]" value="<?php echo $row['id']?>">
                                    </td>
                                    <td class="total">₱</td>
                                </tr>
                    <?php 
                        }
                    }
                ?>
            </tbody>
        </table>
        <div class="cart-footer">
            <div class="cart-footer-container">
                <p>Subtotal <span id="sub-total">₱</span></p>
                <p class="tax-info">Taxes and shipping calculated at checkout</p>
                <div>
                    <input type="submit" name="checkout" class="checkout-button" value="Check Out">
                    <input type="submit" name="update" class="cart-button" value="Update Cart">
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </form>
    </div>
    
    <div class="bottom">

    </div>
    <!-- Footer -->
    <?php require 'includes/footer.inc.php';?>