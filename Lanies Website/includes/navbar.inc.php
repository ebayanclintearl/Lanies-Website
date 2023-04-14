<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<!-- Navbar -->
<header>
    <nav>
        <a href="index.php" class="logo">Lanie's Empanada</a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="admin.php">Admin</a></li>
            <!-- display login when user is not logged-in otherwise the account page (Media query) -->
            <?php if(isset($_SESSION["login"]) && $_SESSION["login"] == true) {
                echo '<li><a href="account.php">Log-out / Sign-out</a></li>';
            } else {
                echo '<li><a href="login.php">Log-in / Sign-Up</a></li>';
            }?>
            
            <li><a href="cart.php">Cart</a></li>
            <div class="user-nav">
                <!-- display login when user is not logged-in otherwise the account page -->
                <?php if(isset($_SESSION["login"]) && $_SESSION["login"] == true) {
                    echo '<a href="account.php" id="log-in"><img src="images/log-in.png" alt="user log-in"></a>';
                } else {
                    echo '<a href="login.php" id="log-in"><img src="images/log-in.png" alt="user log-in"></a>';
                }?>
                <?php 
                    $cartBubbleCount = "0";
                    if(isset($_SESSION['cartBubbleCount']) || !empty(isset($_SESSION['cartBubbleCount']))) {
                        $cartBubbleCount = $_SESSION['cartBubbleCount'];
                    };
                ?>
                <a href="cart.php" id="shopping-cart"><img src="images/shopping-cart.png" alt="shopping cart"><span class="cart-bubble"><?php echo $cartBubbleCount;?></span></a>
            </div>
        </ul>
        <div class="hamburger-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="clear"></div>
    </nav>
</header>
<script src="./js_scripts/hamburger.js"></script>