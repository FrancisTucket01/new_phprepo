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
                header("Location: /?error=profile not found. Please contact the Administrator");
            }else{
                $mydata = $conn->query($udata);
                $myrow = $mydata->fetch_assoc();
                
                $fname = $row['fname'];
                $sname = $row['sname'];
                $uid = $row['id'];
                $name = $fname . " " . $sname;
                $username = $row['username'];
                $email = $row['email_address'];
                $bal = $row['balance'];
                $pass = $row['passwords'] ; 
                $status = $row['status'] ; 
            }
            
        ?>
        <div class="profile-maincontent">
            <div class="profile-main-wrapper">
                <div class="profile-main-content">
                    <label for="name">Name</label>
                    <input type="text" disabled value=<?php echo $name ?>>
                    <label for="name">Email Address</label>
                    <input type="text" disabled value=<?php echo $email?>>
                    <label for="name">Contacts</label>
                    <input type="text" disabled value="+254-7XXX-XXX-XX">
                    <label for="name">Username</label>
                    <input type="text" disabled value=<?php echo $username ?>>
                    <label for="name">Balance USD</label>
                    <input type="text" disabled value=<?php echo $bal ?>>

                </div>
            </div>

        </div>

    </div>
</div>



<?php

require("includes/footer.php")

?>