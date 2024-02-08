<?php
include 'db.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM Items";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>productId</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['productId']}</td>
                <td>{$row['productName']}</td>
                <td>{$row['desc']}</td>
                <td>{$row['productPrice']}</td>
                <td>{$row['qty']}</td>
                <td>{$row['img']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>