<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title id="title">Login</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0">
        <meta name="author" content="Camsdono Studios">
        <meta name="description" content="A better place to keep track of your bugs and manage teams">

        <link rel="apple-touch-icon" sizes="180x180" href="../../images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon/favicon-16x16.png">
        <link rel="manifest" href="../../images/favicon/site.webmanifest">

        <link rel="stylesheet" href="../../styles/styles.css" />
    </head>
    <body>
        
        <section class="blue">
            <h1 id="login-detail">Login</h1>
            <div class="sign-options">
                <div class="button-holder">
                    <input onclick="LoginPage()" type="button" value="Login">
                </div>
                <div class="button-holder">
                    <input onclick="SignupPage()" type="button" value="Register">
                </div>
            </div>
            <div id="login-form" class="login-form">
                <form action="../../backend/auth/loginprocess.php" method="POST">  
                    <div class="input-row">
                        <input type="text" placeholder="Username" name="username" require>
                    </div>
                    <div class="input-row">
                        <input type="password" placeholder="Password" name="password" require>
                    </div>
                    <div class="input-row">
                        <input type="submit" value="Login" name="login-btn">
                    </div>
                </form>
            </div>

            <div id="signup-form" class="signup-form">
                <form action="../../backend/auth/loginprocess.php" method="POST">  
                    <div class="input-row">
                        <input type="text" placeholder="Name" name="name" require>
                    </div>
                    <div class="input-row">
                        <input type="email" placeholder="Email" name="email" require>
                    </div>
                    <div class="input-row">
                        <input type="text" placeholder="Username" name="username" require>
                    </div>
                    <div class="input-row">
                        <input type="password" placeholder="Password" name="password" require>
                    </div>
                    <div class="input-row">
                        <input type="submit" value="Register" name="register-btn">
                    </div>
                </form>
            </div>
        </section>
    
        <footer>
            <p class="footer-txt">@Camsdono Studios</p>
        </footer>
    </body>
</html>
<script src="../../js/login.js"></script>