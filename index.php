<?php
require("includes/conn.php");

$smt = "SELECT * FROM products";
$laptops = $conn->query($smt);

$smtt = "SELECT * FROM products WHERE category='desktop'";
$desktops = $conn->query($smtt);


require('includes/userdata.php');
require('includes/header.php');
require('includes/messages.php');
require('includes/errors.php');
?>

<div class="content">
    <div class="content-home-wrapper">
        <div class="home-container">
            <div class="home-content-main">
                <img src="/Images/keyboard1.jpg" alt="">
                <div class="home-category-desc">
                    <div class="home-category-title">Laptops</div>
                    <div class="home-category-detail">
                    <p>To see all items visit<br><br><br> <a href="/arena.php">Market Page</a></p>
                    </div>
                   

                </div>

            </div>
            <div class="home-items">
                <span class="btn-prev" id="prev">prev</span>
                <span class="btn-next" id="next">Next</span>
                <div class="home-items-wrapper" id="toscroll">
                
                
                    <?php
                        if ($laptops->num_rows > 0){
                            while($row = $laptops->fetch_assoc()){
                                $pname = $row['name'];
                                $pprice = $row['price'];
                                $pdesc = $row['description'];
                                $pbarcode = $row['barcode'];
                                $pavail = $row['availability'] ; 
                                $pimg = "$pbarcode" . ".jpg";
                                if ($pavail == 1){
                                    $avail = "Available<br>";
                                }else{
                                    $avail = "Not Available<br>";
                                }
                                echo "
                                <a href='/products.php?code=$pbarcode'><div class='home-item'>
                                    <div class='home-item-img'>
                                        <img src='/Images/$pimg' alt='$pbarcode'>
                                    </div>
                                    <div class='prod-desc'>
                                        $pdesc<br>
                                    </div>
                                </div></a>
                            ";
                            }
                        }
                    ?>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require('includes/footer.php');
?>
