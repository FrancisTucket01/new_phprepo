<?php
$t = md5('true');
$f = md5('false');
if (isset($_COOKIE['status'])){
    if ($_COOKIE['status'] == $t){
        $status = $t;
        $logedin = true;
        $uname = $_COOKIE['uname'];
        $smmt = "SELECT * FROM Users WHERE username = '$uname'";
        $bal = $conn->query($smmt);
        $row = $bal->fetch_assoc();
        
        $balance = $row['balance'];
        $balance = number_format($balance);
        $admin = $row['status']; 
    
        $smtt = "SELECT * FROM items WHERE username = '$uname'";
        $data = $conn->query($smtt);
        $count = $data->num_rows;
        $cartArray = array();
        $item = 0;
        if ($count != 0){
            while($row1 = $data->fetch_assoc()){
                $pname = $row1['name'];
                $pdesc = $row1['description'];
                $cartbarcode = $row1['barcode'];
                $pimg = "$cartbarcode" . ".jpg";
                $cartArray[$item] = array($pimg, $pname, $pdesc, $cartbarcode);
                $item ++ ;
            }
        }
        

        
    }else{
        $uname = "";
        $count = "0";
        $balance ="0";
        $status = $f;
        $logedin = false;
    }
}else{
    $uname = "";
    $count = "0";
    $balance ="0";
    $status = $f;
    $logedin = false;
}


function returnData($uname){
    return $uname;
}

$data = returnData($uname);



?>