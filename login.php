<?php

if ( isset($_COOKIE['status'])){
    $status = $_COOKIE['status'];
    if ($status == md5("true")){
        header("Location: /?message=You are already loged in");
    }
}

require('includes/userdata.php');
require("includes/header.php");
?>
        <div class="home">
            <div class="form-container">
                <form action="auth.php" class="loreg" method="post">
                    <?php require("includes/errors.php"); ?>
                    <div class="form">
                        <img src="/Images/keyboard.jpg" alt="logo">
                        <h2>
                            Please Enter Your credentials to continue
                        </h2>
                        <label for="username">Username :</label>
                        <br>
                        <input name="uname" type="text" placeholder="Username">
                        </br>
                        <label for="password">Password :</label>
                        </br>
                        <input name="upass" type="password" placeholder="password">
                        <br>
                        <div class="query">
                            Do not have an account? <a href="/registration.php">Register</a>
                        </div>
                        <br>
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div><br><br><br><br><br>
        <?php require("includes/footer.php"); ?>