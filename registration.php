<?php

if ( isset($_COOKIE['status'])){
    $status = $_COOKIE['status'];
    if ($status == md5('true')){
        header("Location: /?message=You are already loged in");
    }
    
}
require('includes/userdata.php');
require("includes/header.php");
?>
        <div class="home">
            <div class="form-container">

                <form action="register.php" class="loreg" method="post">
                    <div class="form">

                        <?php require("includes/errors.php"); ?>
                        <img src="/Images/keyboard.jpg" alt="logo">
                        <h2>
                            Please Enter Your credentials to continue
                        </h2>
                        <label for="username">First Name :</label>
                        <br>
                        <input name="fname" type="text" placeholder="First name">
                        </br>
                        <label for="password">Last Name :</label>
                        </br>
                        <input name="sname" type="text" placeholder="Last name">
                        </br>
                        <label for="password">Email Address :</label>
                        </br>
                        <input name="email" type="email" placeholder="Email Address">
                        </br>
                        <label for="username">Username :</label>
                        <br>
                        <input name="username" type="text" placeholder="Username">
                        </br>
                        <label for="password">Password :</label>
                        </br>
                        <input name="password" type="password" placeholder="password">
                        </br>
                        <label for="password">Confirm Password :</label>
                        </br>
                        <input name="password2" type="password" placeholder="Confirm password">
                        <br>
                        <div class="query">
                            Already have an account? <a href="/login.php">Login</a>
                        </div>
                        <br>
                        <input type="submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
        <?php require("includes/footer.php"); ?>
