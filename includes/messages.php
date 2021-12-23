<?php
    if (isset($_GET['message'])){
        $message =  $_GET['message'];
        $display = "flex";
    }else{
        $display = "none";
    }

?>
<div class="info" style="display:<?=$display?>">
    <div class="message">
        <?php echo $message; ?>
    </div>
</div>