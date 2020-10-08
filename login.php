<?php require 'fragments/connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/login.css"> 
    <script src="js/login.js"></script>

    <title>Login</title>
</head>
<body>
        <div class="outercontainer">

                <div class="login-form">

                    <div class="login">
                        <h3>The Daily</h3><h2>Read<h2>
                        <div class="error-out">
                 
                        </div><!--error-out-->
                        <form method="post" style="margin-left:8%"> 
                            <h1>Username<h1>
                            <input type="text" name="username">
                            <h1>Password<h1>
                            <input type="password" name="password">
                            <input type="submit" name="login" value="Sign In"> 
                            <input type="button" class="form-reg" value="REGISTER"> 
                        </form>
                    </div><!--login-->

                    <div class="register">

                        <h1>Sign Up</h1>

                        <div class="reg-error-out">
                        
                        </div><!--error-out-->
                        <form enctype="multipart/form-data" method="post" action="fragments/registerUser.php">
                            <input type="text" name="reg-username" placeholder="Your username">
                            <input type="password" name="reg-password" placeholder="Your password">
                            <input type="email" name="reg-email" placeholder="Your email">
                            <label>Upload Profile Picture</label>

                            <form class="form" id="image-upload" action="image-thank-you.html">
                                <input type="hidden" id="max_file_size" name="max_file_size" value="300000">

                                <div class="form--field image-upload--headshot-image">
                                    <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" style="width:103px" class="upload">
                                    <input type="file" name="user-profile" id="image-upload--headshot">

                                </div>
                                <input type="submit" value="REGISTER"> 
                                <input  class="back-login" type="button" value="LOGIN"> 
                            </form>
        
                            
                            
                        </form>
                    </div><!--register-->

                </div><!--login-form-->
    </div>

    
</body>
</html>