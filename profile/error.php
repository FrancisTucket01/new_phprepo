<?php 
if($_COOKIE['status'] != md5("true")){
    header("Location: /?error=You are not logedin... Please logein and try again");
}
require("includes/conn.php");
require("includes/userdata.php");
require("includes/header.php");


?>



<div class="profile-conteiner">
    <div class="profile-wrapper">
        <!--<div class="profile-sidenav">
            <a href="">profile</a>
            <a href="">Change profile Contents</a>
            <a href="">Preferences</a>
            <a href="">Payment detailes</a>
            <a href="">Delete account?</a>

        </div>
        -->
        <?php
            $udata = "SELECT * FROM users WHERE username = '$uname'";
            if ($conn->query($udata) != true){
                header("Location: /profile/error.php");
            }
        ?>
        <div class="profile-maincontent">
            <div class="profile-main-wrapper">
                <div class="profile-main-content">
                   
                </div>
            </div>

        </div>

    </div>
</div>



<?php

require("includes/footer.php")

?>