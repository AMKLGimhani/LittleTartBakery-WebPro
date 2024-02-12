<?php
$servername = "php24-db-1";
$username = "LittleTard";
$password = "Engi@12345";
$dbname = "LittleTard";


$conn = new mysqli($servername,$username,$password,$dbname);
 

if($conn->connect_error)
{
  die("Connection Failed:" . $conn->connect_error);
}

?>