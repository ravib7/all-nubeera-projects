<?php
require("Components/core/admin-connection.php");
require("Admin-Login-Button.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-Form</title>

   <!------------Custom CSS file link-------------->

   <link rel="stylesheet" href="Components\CSS\admin-login-page.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="Components/CSS/style.css">
   </head>

 <body>

 <div class="login-form">
    <h2>ADMIN LOGIN</h2>
    <form method="POST" action="admin-login.php">
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="username" name="aname">
    </div>

    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="password" name="apassword">
    </div>

    <button type="submit" name="singin">Sign In</button>

    <div class="extra">
        <a href="#">Forgot Password ?</a>
        <!-- <a href="#">Create an Account</a> -->
    </div>
    </form>
    </div>
    </body>
    </html>