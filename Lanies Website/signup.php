<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lanie's Sign Up</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/footer.css">
    <script defer src="js_scripts/signup_validation.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.inc.php';?>

    <div class="content">
        <form action="includes/signup.inc.php" method="post" id="signupForm">
            <table>
                <thead>
                    <tr>
                        <td><strong>Sign Up</strong></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="err-msg"></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                    </tr>
                    <tr>
                        <td> 
                            <input type="text" placeholder="Enter first name" name="fname" id="fname">
                        </td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                    </tr>
                    <tr>
                        <td> 
                            <input type="text" placeholder="Enter last name" name="lname" id="lname">
                        </td>
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
                        <td>Repeat Password</td>
                    </tr>
                    <tr>
                        <td> 
                            <input type="text" placeholder="Repeat password" name="passwordRepeat" id="passwordRepeat">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Sign Up" name="signup"></td>
                    </tr>
                    <tr>
                        <td>Have an account? <a href="login.php">Log in</a></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <!-- Footer -->
    <?php require 'includes/footer.inc.php';?>