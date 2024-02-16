<?php  

session_start(); 
require_once 'memberdb.php'; // calling the database connection.
?>

<?php

if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $keys => $values) {
        $item_name = $values["item_name"];
        $item_price = $values["item_price"];
        $item_quantity = $values["item_quantity"];
        
        // insert the data into the database
        $query = "INSERT INTO Order_Table (item_name, item_price, item_quantity) VALUES ('$item_name', '$item_price', '$item_quantity')";
        $result = mysqli_query($conn, $query);
        
        if(!$result) {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
include 'layout/footer.php';
?>