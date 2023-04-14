<?php require 'includes/delivery.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lanie's Delivery</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/delivery.css">
    <link rel="stylesheet" href="css/footer.css">
    <script defer src="js_scripts/delivery_validation.js"></script>
</head>
<body>
    <!-- Navbar -->
     <?php require 'includes/navbar.inc.php';?>

    <!-- Banner -->
    <div class="banner">
        <div class="banner-content">
            <div>
                <h1>We Deliver</h1>
                <br>
                <p><strong>Our Delivery Services is lightning fast and reliable.<br>Just wait from the comfort of your homes.</strong></p>
            </div>
        </div>
    </div>

    <!-- Delivery Form section -->
    <div class="content">
        <table>
            <thead>
                <tr>
                    <td colspan="2"><strong>Delivery</strong></td>
                </tr>
            </thead>
            <tbody>
                <form id="deliveryForm" action="" method="post">
                    <tr>
                        <td>Order for delivery</td>
                    </tr>
                    <tr>
                        <td>Contact details</td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="First Name" value="<?php echo $firstname;?>" id="fname"></td>
                        <td><input type="text" placeholder="Last Name" value="<?php echo $lastname;?>" id="lname"></td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Mobile number" id="mobileNumber"></td>
                        <td><input type="text" placeholder="Email" value="<?php echo $email;?>" id="email"></td>
                    </tr>
                    <tr>
                        <td>Delivery Address</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" placeholder="Address line 1" id="address1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" placeholder="Address line 2" id="address2"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" placeholder="City/Municipality" id="city"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <select name="region" id="region">
                                <option value="Region">Region</option>
                                <option value="Metro Manila">Metro Manila</option>
                                <option value="Abra">Abra</option>
                                <option value="Agusan del Norte">Agusan del Norte</option>
                                <option value="Agusan del Sur">Agusan del Sur</option>
                                <option value="Aklan">Aklan</option>
                                <option value="Albay">Albay</option>
                                <option value="Antique">Antique</option>
                                <option value="Apayao">Apayao</option>
                                <option value="Aurora">Aurora</option>
                                <option value="Basilan">Basilan</option>
                                <option value="Bataan">Bataan</option>
                                <option value="Batanes">Batanes</option>
                                <option value="Batangas">Batangas</option>
                                <option value="Benguet">Benguet</option>
                                <option value="Biliran">Biliran</option>
                                <option value="Bohol">Bohol</option>
                                <option value="Bukidnon">Bukidnon</option>
                                <option value="Bulacan">Bulacan</option>
                                <option value="Cagayan">Cagayan</option>
                                <option value="Camarines Norte">Camarines Norte</option>
                                <option value="Camarines Sur">Camarines Sur</option>
                                <option value="Camiguin">Camiguin</option>
                                <option value="Capiz">Capiz</option>
                                <option value="Catanduanes">Catanduanes</option>
                                <option value="Cavite">Cavite</option>
                                <option value="Cebu">Cebu</option>
                                <option value="Cotabato">Cotabato</option>
                                <option value="Davao de Oro">Davao de Oro</option>
                                <option value="Davao del Norte">Davao del Norte</option>
                                <option value="Davao del Sur">Davao del Sur</option>
                                <option value="Davao Occidental">Davao Occidental</option>
                                <option value="Davao Oriental">Davao Oriental</option>
                                <option value="Dinagat Islands">Dinagat Islands</option>
                                <option value="Eastern Samar">Eastern Samar</option>
                                <option value="Guimaras">Guimaras</option>
                                <option value="Ifugao">Ifugao</option>
                                <option value="Ilocos Norte">Ilocos Norte</option>
                                <option value="Ilocos Sur">Ilocos Sur</option>
                                <option value="Iloilo">Iloilo</option>
                                <option value="Isabela">Isabela</option>
                                <option value="Kalinga">Kalinga</option>
                                <option value="La Union">La Union</option>
                                <option value="Laguna">Laguna</option>
                                <option value="Lanao del Norte">Lanao del Norte</option>
                                <option value="Lanao del Sur">Lanao del Sur</option>
                                <option value="Leyte">Leyte</option>
                                <option value="Maguindanao">Maguindanao</option>
                                <option value="Marinduque">Marinduque</option>
                                <option value="Masbate">Masbate</option>
                                <option value="Misamis Occidental">Misamis Occidental</option>
                                <option value="Misamis Oriental">Misamis Oriental</option>
                                <option value="Mountain Province">Mountain Province</option>
                                <option value="Negros Occidental">Negros Occidental</option>
                                <option value="Negros Oriental">Negros Oriental</option>
                                <option value="Northern Samar">Northern Samar</option>
                                <option value="Nueva Ecija">Nueva Ecija</option>
                                <option value="Nueva Vizcaya">Nueva Vizcaya</option>
                                <option value="Occidental Mindoro">Occidental Mindoro</option>
                                <option value="Oriental Mindoro">Oriental Mindoro</option>
                                <option value="Palawan">Palawan</option>
                                <option value="Pampanga">Pampanga</option>
                                <option value="Pangasinan">Pangasinan</option>
                                <option value="Quezon">Quezon</option>
                                <option value="Quirino">Quirino</option>
                                <option value="Rizal">Rizal</option>
                                <option value="Romblon">Romblon</option>
                                <option value="Samar">Samar</option>
                                <option value="Sarangani">Sarangani</option>
                                <option value="Siquijor">Siquijor</option>
                                <option value="Sorsogon">Sorsogon</option>
                                <option value="South Cotabato">South Cotabato</option>
                                <option value="Southern Leyte">Southern Leyte</option>
                                <option value="Sultan Kudarat">Sultan Kudarat</option>
                                <option value="Sulu">Sulu</option>
                                <option value="Surigao del Norte">Surigao del Norte</option>
                                <option value="Surigao del Sur">Surigao del Sur</option>
                                <option value="Tarlac">Tarlac</option>
                                <option value="Tawi-Tawi">Tawi-Tawi</option>
                                <option value="Zambales">Zambales</option>
                                <option value="Zamboanga del Norte">Zamboanga del Norte</option>
                                <option value="Zamboanga del Sur">Zamboanga del Sur</option>
                                <option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" placeholder="ZIP Code" id="zipCode"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Continue" name="continue"></td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <?php require 'includes/footer.inc.php';?>