<?php
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $product_id = $_POST['product_id'];
  $customer_name = $_POST['customer_name'];
  $rating = $_POST['rating'];
  $review_text = $_POST['review_text'];

  include 'db.php';

  $sql = "INSERT INTO review (product_id, customer_name, rating, review_text) 
  VALUES ('$product_id', '$customer_name', '$rating', '$review_text')";


if ($conn->query($sql) === TRUE) 
{
  echo "Review submitted successfully";
} else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>



