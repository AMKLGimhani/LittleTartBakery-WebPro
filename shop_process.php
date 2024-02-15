<?php
$title = "Shop Process";

session_start();   
include 'dbshop.php';

// Check if the form is submitted from shop.php.
if(isset($_POST["submit_order"])) {
    // Check if shopping cart session variable is set and not null
    if(isset($_SESSION["shopping_cart"]) && is_array($_SESSION["shopping_cart"])) {
        // Loop through shopping cart items
        foreach($_SESSION["shopping_cart"] as $keys => $values) {
            $order_id = 1; 
            $pid = $values["item_id"];
            $quantity = $values["item_quantity"];
            $price = $values["item_price"];

            // Insert data into Order_Table
            $sql = "INSERT INTO Order_Table (order_id, id, quantity, price) VALUES ($order_id, $pid, $quantity, $price)";

            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        // Clear shopping cart after placing order
        unset($_SESSION["shopping_cart"]);
        echo '<script>alert("Your order has been placed successfully!")</script>';
        echo '<script>window.location="shop.php"</script>';
    } else {
        // if shopping cart is empty
        echo "Shopping cart is empty!";
    }    
} else {
    // if the form is not submitted
    echo "Form is not submitted!";
}
?>