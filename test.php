<?php
$data = 1298424;

echo number_format($data);
?>

<span class="btn-prev"><button>prev</button></span>
        <span class="btn-next"><button>Next</button></span>
        
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
                    <a href='/products.php?code=$pbarcode'><div class='home-products'>
                        <div class='prodimg'>
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
        
    <h3>Sample products : category Laptops</h3>
    <div class="home-content">
    <?php
            if ($desktops->num_rows > 0){
                while($row = $desktops->fetch_assoc()){
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
                    <div class='home-products'>
                        <div class='prodimg'>
                            <img src='/Images/$pimg' alt='$pbarcode'>
                        </div>
                        <div class='prod-desc'>
                            $pdesc<br>
                            Price : Ksh$pprice<br>
                            $avail
                        </div>
                    </div>
                ";
                }
            }
        ?>
    </div>
