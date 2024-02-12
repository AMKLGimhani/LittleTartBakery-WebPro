<?php
include 'header.php';
include 'db.php';


$sql = "SELECT customer_name, rating, review_text * FROM review ";
$result = $conn->query($sql);

if($result->num_rows> 0)
{
    while($row = $result->fetch_assoc())
    {
        echo "<div class='customer_review'>";
        echo "<h3>" . $row["customer_name"] . "</h3>";
        echo "<p> Rating: " . $row["rating"] . "</p>";
        echo "<p>" . $row["review_text"] . "</p>";
        echo "</div>";
    }
}
else
{
    echo "No Reviews Yet.";
}
$conn->close();

?>