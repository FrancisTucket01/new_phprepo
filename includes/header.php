
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Infinite |</title>
</head>
<body id="body">
    
    <head>
        <nav id="navbar">
            <div class="nav-wrapper">
                <div class="nav-container">
                    <div class="nav-logo">
                        <img src="/Images/keyboard.jpg" alt="Logo">
                        <a href="/"><li>Infinite</li></a>
                    </div>
                    <div class="nav-responsive">
                        <div class="nav-responsive-wrapper">
                            <div class="burger">
                                <span class="bug1"></span>
                                <span class="bug2"></span>
                                <span class="bug3"></span>
                            </div>
                            <div class="nav-toggle">
                                <a href="/" class="nav-toggled-a">Home</a>
                                <a href="/arena.php" class="nav-toggled-a">Market</a>
                                <a href="/cart.php" class="nav-toggled-a">Cart</a>
                                <a href="/About.php" class="nav-toggled-a">About Us</a>
                                <a href="/?message=Page under maintanance... Sorry for inconviniences caused." class="nav-toggled-a">Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-content">
                        <ul id="nav-items" class="nav-items">
                            <a href="/"><li class="nav-item">Home</li></a>
                            <a href="/arena.php"><li class="nav-item">Market</li></a>
                            <a href="/cart.php"><li class="nav-item cart">Cart
                                <span class="cart-bardge"><?php echo $count ?></span>
                                <div class="cart-content">
                                    <ul>
                                        <?php 
                                            $new = $count -1;
                                            while($new >= 0){
                                                $cartimgname = $cartArray[$new][0];
                                                $carttitle = $cartArray[$new][1];
                                                $cartdesc = $cartArray[$new][2];
                                                $cartbcode = $cartArray[$new][3];
                                                echo "
                                                    <a href='/products.php?code=$cartbcode'><li>
                                                        <div class='nav-cart-img'><img src='/Images/$cartimgname' alt='$cartimgname'></div>
                                                        <div class='nav-cart-body'>$carttitle</div>
                                                    </li></a>
                                                ";
                                                $new --;
                                            }
                                            
                                        ?>
                                        
                                        
                                    </ul>
                                </div>
                            </li></a>
                            <?php 
                                if ($logedin){ 
                                    if ($admin == 0){
                                        echo "
                                            <a href='/admdashboard.php'><li class='nav-item'>Admin</li></a>
                                        ";  
                                    }
                                    ?>

                        </ul>
                    
                    </div>
                    
                    
                    <?php   echo "
                            <div class='profile'>
                                <li class='nav-item-prof proffile'>
                                    <div class='profile-img'></div>
                                    <div class='nav-item-proft'>Profile</div>
                                    <div class='profile-content'>
                                        <span class='popup-pointer'></span>
                                        <div class='profile-content-header'>
                                            $uname
                                        </div>
                                        <div class='hr'></div>
                                        <div class='profile-content-body'>
                                            <ul>
                                                <a href='/?message=Page under maintanance... Sorry for inconviniences caused.'><li>Profile</li></a>
                                                <a id='theme'><li>Theme</li></a>
                                                <a href='/logout.php'><li>Logout</li></a>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </li>
                            </div>
                            ";
                         }else{
                            echo '
                            <div class="profile">
                                <a href="/login.php"><li class="nav-item">Sign in</li></a>
                                <a href="/registration.php"><li class="nav-item">Sign up</li></a>
                            </div>
                            ';
                        } ?>
                    
                </div>
            </div>
        </nav>

    </head>
    
   
