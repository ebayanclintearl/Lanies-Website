<?php require 'includes/contact.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lanie's Contact</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <script defer src="js_scripts/contact_validation.js"></script>
</head>
<body>
    <!-- Navbar -->
     <?php require 'includes/navbar.inc.php';?>

    <!-- Banner -->
    <div class="banner">
        <div class="banner-content">
            <div>
                <h1>CONTACT US</h1>
                <br>
                <p><strong>Communication is one key to a successful business.<br> So please do get in touch with us. We'd love to hear from you.</strong></p>
            </div>
        </div>
    </div>

    <!-- Contact Form section -->    
    <div class="content">
        <div class="content2">
            <h3>GET IN TOUCH</h3>
            <h1>CONTACT US</h1>
            <div class="dash"></div>
            <p>Kindly fill up the form below and we'll get back to you</p>
    
        <table>
            <form id="contactForm" action="" method="post">
            <tr>
                <td><b>Name <span>*</span><b></td>
            </tr>
            <tr>
                <td><input type="text" name="contactFName" placeholder="First" value="<?php echo $firstname;?>" id="fname"></td>
                <td><input type="text" name="contactLName" placeholder="Last" value="<?php echo $lastname;?>" id="lname"></td>
            </tr>
            <tr>
                <td><b>Email <span>*</span><b></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="contactEmail" placeholder="abcd@gmail.com" value="<?php echo $email;?>" id="email"></td>
            </tr>
            <tr>
                <td><b>Subject <span>*</span><b></td>
            </tr>
            <tr>
                <td colspan="2">
                    <select name="subject" id="subject">
                        <option value="General Inquiry">General Inquiry</option>
                        <option value="Franchise">Franchise</option>
                        <option value="Events &amp; Reservations">Events &amp; Reservations</option>
                        <option value="Press &amp; Media">Press &amp; Media</option>
                        <option value="Others">Others</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>Your Message <span>*</span><b></td>
            </tr>
            <tr>
                <td colspan="2"><textarea name="message" cols="2" rows="12" placeholder="Type your message here..." id="message"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Send" name="send"></td>
            </tr>
            </form>
        </table>
        </div>

        <!-- Lanie's Information section -->
        <div class="content3">
            <div class="wrapper">
                <h4>Batac City</h4>
                <h1>MAIN OFFICE</h1>
                <div class="dash"></div>
                <div class="schedule">
                    <p>mon-fri: 8:00AM – 5:00PM</p>
                    <p>sat: 08.00 – 4.00PM</p>
                </div>
                <div class="contact">
                    <p><span><img src="images/contact_phone-icon.png" alt="phone icon"></span> +63 975 888 6215</p>
                    <p><span><img src="images/contact_email-icon.png" alt="email icon"></span> caesarcaldeteratorres@gmail.com</p>
                    <p><span><img src="images/contact_location_icon.png" alt="phone icon"></span>Riverside R.S. Empanadaan Building<br> Batac City</p>
                </div>
                <hr>
                <div class="social-media">
                    <a href="https://www.instagram.com/" target="_blank"><img src="images/contact_instagram.png" alt="facebook icon"></a>
                    <a href="https://twitter.com/" target="_blank"><img src="images/contact_twitter.png" alt="twitter icon"></a>
                    <a href="https://www.facebook.com/pages/category/Filipino-Restaurant/Lanies-Batac-Special-Empanada-230667257328959/" target="_blank"><img src="images/contact_facebook.png" alt="instagram icon"></a> 
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!-- Footer -->
    <?php require 'includes/footer.inc.php';?>