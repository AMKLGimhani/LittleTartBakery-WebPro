

<?php

if (isset($_POST['Submitorder'])) {
    
  $quantity = $_POST['quantity'];
  $hidden_name= $_POST['hidden_name'];
  $hidden_price = $_POST['hidden_price'];
    


  include 'dbmember.php';

    
  $sql = "INSERT INTO Order_Table (quntity,price) 
  VALUES ('$quantity', '$hidden_price')";


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