<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lanie's Gallery</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <!-- Navbar -->
     <?php require 'includes/navbar.inc.php';?>

    <!-- Banner -->
    <div class="banner">
        <div class="banner-content">
            <div>
                <h1>GALLERY</h1>
                <br>
                <p><strong>Here you can find our product's photo.</strong></p>
            </div>
        </div>
    </div>

    <!-- Gallery section -->
    <h1 class="gallery-title">Lanie's Batac Special Empanada Gallery</h1>
    <div class="content">
        <div class="img-l"><img src="images/gallery_empanada.jpg" alt="empanada" ></div>
        <div class="img-r"><img src="images/gallery_empanada2.jpg" alt="empanada"></div>
        <div class="img-l"><img src="images/gallery_empanada3.jpg" alt="empanada"></div>
        <div class="img-r"><img src="images/gallery_empanada4.jpg" alt="empanada"></div>
        <div class="img-l"><img src="images/gallery_kwek kwek.jpg" alt="kwek kwek"></div>
        <div class="img-r"><img src="images/gallery_longganisa.jpg" alt="longganisa"></div>
        <div class="img-l"><img src="images/gallery_miki.jpg" alt="miki"></div>
        <div class="img-r"><img src="images/gallery_river side.jpg" alt="river side batac"></div>
    </div>
    <div class="clear"></div>

    <!-- Footer -->
    <?php require 'includes/footer.inc.php';?>