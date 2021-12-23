<?php

require("includes/conn.php");

if (isset($_REQUEST)){
  $pname = $_REQUEST['name'];
  $pprice = $_REQUEST['price'];
  $pcode = $_REQUEST['barcode'];
  $pdesc = $_REQUEST['description'];
  $pavail = $_REQUEST['avail'];
  $pcategory = $_REQUEST['category'];

  $smt = "INSERT INTO products (name, price, barcode, description, availability, category) VALUES ('$pname', '$pprice', '$pcode', '$pdesc', '$pavail', '$pcategory')";
  if ($conn->query($smt) === TRUE){
    echo "query executed successfully";
    header("Location: /admadd.php?message=Query executed successfully");
  }else{
    echo "query NOT executed successfully";
    header("Location: /admadd.php?error=Query NOT executed successfully");
  }
}else{
  echo "changes to be made";
  header("Location: /admadd.php?error=Not all variables are set");

}

$target_dir = "Images/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["file"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

?>