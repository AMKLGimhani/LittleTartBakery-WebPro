<?php

require_once 'memberdb.php';

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
  $customer_name = $_POST['customer_name'];
  $rating = $_POST['rating'];
  $review_text = $_POST['review_text'];

 

  $sql = "INSERT INTO review (customer_name, rating, review_text) 
  VALUES ('$customer_name', '$rating', '$review_text')";


if ($conn->query($sql) === TRUE) 
{
  echo "<h2> Review submitted successfully</h2>";
} else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>



