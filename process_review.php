<?php
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $customer_name = $_POST['customer_name'];
  $rating = $_POST['rating'];
  $review_text = $_POST['review_text'];

<<<<<<< HEAD
  include 'dbcareer.php';
=======
  include 'dbmember.php';
>>>>>>> fce752abe982b334ae651decd9dbd8fdc91c0b43

  $sql = "INSERT INTO review (customer_name, rating, review_text) 
  VALUES ('$customer_name', '$rating', '$review_text')";


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



