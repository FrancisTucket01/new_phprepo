<?php
    if (isset($_GET['error'])){
        $message =  $_GET['error'];
        $display = "flex";
    }else{
        $display = "none";
    }
    
?>
<div class="errors" style="display:<?=$display?>">
    <div class="message">
        <?php echo  $_GET['error'] ?>
    </div>
    
</div>