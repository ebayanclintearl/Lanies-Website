<?php 
require_once 'includes/connection.inc.php';
require 'includes/cartcount.inc.php';
changeCartBubbleCount($con, $user_id);

if(empty($_SESSION['firstLoad'])) {
    $database->restoreMenuProducts();
    $_SESSION['firstLoad'] = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lanie's Homepage</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.inc.php';?>

    <!-- Banner -->
    <div class="banner">
        <div class="banner-content">
            <div>
                <h2>GENUINE ILOCANO FOOD</h2>
                <h1>Enjoy our tasty<br> Empanada</h1>
                <br>
                <a href="menu.php">Order Here</a>
            </div>
        </div>
    </div>
    
    <!-- What is Empanada section -->
    <div class="content">
        <div class="img-content">
            <img src="images/empanada_content.jpg" alt="empanada content">
        </div>
        <div class="text-content">
            <h1>What is <span>Ilocos Empanada</span>?</h1>
            <p> The empanadas most Manileños know are made of crusty bread, the ones being sold in the streets Ilocos are quite different. Instead of bread, the crust is made of rice flour and in place of the usual giniling, its filling is stuffed with egg, bean sprouts and garlic longanisas.</p>
        </div>
        <div class="clear"></div>  
    </div>

    <!-- Empanada Benefits section -->
    <div class="content2">
        <div>
            <h1>Lanie's Batac Special<br> Empanada</h1>
            <h3>affordable and healthy</h3>
            <p>the empanadas are affordable and are healthy in any situation, the best food option "on the go".</p>
            <h3>Are an Ideal Product to Take Home</h3>
            <p>They remain hot up to 30 minutes after their preparation and do not lose their quality at all.</p>
            <h3>Experience Unique Food</h3>
            <p>you can choose the empanada and experience its mouth watery  taste, and share it with your friend and love ones.</p>
        </div>
    </div>

    <!-- Menu -->
    <div id="menu" class="content3">
        <div>
            <h1>CHECK OUT OUR MENU</h1>
        </div>
        <div class="img-menu img-menu-l">
            <div>
                <img src="images/menu_empanada.jpg" alt="empanada menu">
            </div>
            <div class="menu-selection">
                <h3>EMPANADA</h3>
                <p>Product Price</p>
                <select>
                    <option value="1">1 piece empanada ₱60.00</option>
                </select><br>
                <button onclick="location.href = 'menu.php'">ORDER NOW</button>
            </div>
        </div>
        <div class="img-menu img-menu-r">
            <div>
                <img src="images/menu_miki.jpg" alt="miki menu">
            </div>
            <div class="menu-selection">
                <h3>MIKI</h3>
                <p>Product Price</p>
                <select>
                    <option value="1">1 piece miki ₱50.00</option>
                </select><br>
                <button onclick="location.href = 'menu.php'">ORDER NOW</button>
            </div>
        </div>
        <div class="clear"></div>
        <div class="img-menu img-menu-l">
            <div>
                <img src="images/menu_kwek kwek.jpg" alt="kwek kwek menu">
            </div>
            <div class="menu-selection">
                <h3>KWEK KWEK</h3>
                <p>Product Price</p>
                <select>
                    <option value="1">4 pcs Ilocos kwek kwek ₱45.00</option>
                </select><br>
                <button onclick="location.href = 'menu.php'">ORDER NOW</button>
            </div>
        </div>
        <div class="img-menu img-menu-r">
            <div>
                <img src="images/menu_longganisa.jpg" alt="longganisa menu">
            </div>
            <div class="menu-selection">
                <h3>LONGGANISA</h3>
                <p>Product Price</p>
                <select>
                    <option value="1">3 pcs longganisa with salted egg ₱150.00</option>
                </select><br>
                <button onclick="location.href = 'menu.php'">ORDER NOW</button>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <!-- Product Order section -->
    <div class="content4">
        <div class="content-text">
            <p><strong>WE DELIVER TO YOUR HOME</strong></p>
            <h1>ORDER NOW FROM OUR WEBSITE</h1>
            <p>We are now accepting orders online. Click here to order directly from us!</p>
            <a href="menu.php">ORDER NOW</a>
        </div>
    </div>

    <!-- Lanie's Information section -->
    <div class="content5">
        <div>
            <h3>Location</h3>
            <img src="images/icon_location.png" alt="location icon">
            <p>Riverside R.S. Empanadaan Building,<br>Batac, Luzon 2906 Philippines</p>
        </div>
        <div>
            <h3>Hour</h3>
            <img src="images/icon_clock.png" alt="clock icon">
            <p><strong>Monday - Friday</strong></p>
            <p>8 AM to 5 PM</p>
            <p><strong>Saturday and Sunday</strong></p>
            <p>CLOSED</p>
        </div>
        <div>
            <h3>Contact</h3>
            <img src="images/icon_phone.png" alt="phone icon">
            <p><strong>Phone</strong></p>
            <p>+63 975 888 6215</p>
            <p><strong>Email</strong></p>
            <p>caesarcaldeteratorres@gmail.com</p>
        </div>
    </div>
    <div class="clear"></div>

    <!-- Footer -->
    <?php require 'includes/footer.inc.php';?>