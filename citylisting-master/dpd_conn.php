<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname ="Africa_Pays";
$database = "AFRICA_PAYS"; 


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";
?>

