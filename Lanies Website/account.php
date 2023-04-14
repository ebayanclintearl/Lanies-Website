<?php require "includes/account.inc.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lanie's Account</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/footer.css">
    <script defer src=""></script>
</head>
<body>
    <!-- Navbar -->
     <?php require 'includes/navbar.inc.php';?>
     <div class="content">
         <div class="account">
             <div>
                 <h1>My Account</h1>
                 <img src="images/user-profile.png" alt="user profile" width="200px">
             </div>
             <div>
                 <h3>Account Details</h3>
                 <div>
                     First Name <br>
                     <input type="text" value="<?php echo $firstname?>" disabled>
                 </div>
                 <div>
                     Last Name <br>
                     <input type="text" value="<?php echo $lastname?>" disabled>
                 </div>
                 <div>
                     Email <br>
                     <input type="text" value="<?php echo $email?>" disabled>
                 </div>

                 <form action="" method="post">
                     <input type="submit" name="logout" value="Log out">
                 </form>
             </div>
         </div>
     </div>

    <!-- Footer -->
    <?php require 'includes/footer.inc.php';?>