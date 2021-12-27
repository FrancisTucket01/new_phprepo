<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "UtGp1ssC6O";

$servername = "remotemysql.com";
$username = "UtGp1ssC6O";
$password = "2e3pUyEXs9";
$dbname = "UtGp1ssC6O";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  header("Location: /notfound.php?error=$conn->connect_error");
}

?>
