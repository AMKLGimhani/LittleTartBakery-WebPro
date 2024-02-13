<?php
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $id = $_POST['id'];
  $item_quantity= $_POST['item_quantity'];
  $item_price = $_POST['item_price'];

  include 'db.php';

  $sql = "INSERT INTO Order_Table (id,quntity,price) 
  VALUES ('$id', '$item_quantity', '$item_price')";


if ($conn->query($sql) === TRUE) 
{
  echo "We placed your order. We will Contact you via e-mai. Thank you";
} else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>