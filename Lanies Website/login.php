<?php 
require 'includes/connection.inc.php';
require 'includes/cartcount.inc.php';
changeCartBubbleCount($con, $user_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lanie's Login</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
    <script defer src="js_scripts/login_validation.js"></script>
</head>
<body>
    <!-- Navbar -->
     <?php require 'includes/navbar.inc.php';?>

    <div class="content">
        <form action="includes/login.inc.php" method="post" id="loginForm">
            <table>
                <thead>
                    <tr>
                        <td><strong>Log in</strong></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="err-msg"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                    </tr>
                    <tr>
                        <td> 
                            <input type="text" placeholder="Enter email" name="email" id="email">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                    </tr>
                    <tr>
                        <td> 
                            <input type="text" placeholder="Enter password" name="password" id="password">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="login" value="Log in" id="login"></td>
                    </tr>
                    <tr>
                        <td>Don't have an account? <a href="signup.php">Create Account</a></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <!-- Footer -->
    <?php require 'includes/footer.inc.php';?>