<?php
// Start the session
session_start();

include 'dbshop.php';

// Check if the form is submitted
if(isset($_POST["submit_order"])) {
    // Check if shopping cart session variable is set and not null
    if(isset($_SESSION["shopping_cart"]) && is_array($_SESSION["shopping_cart"])) {
        // Loop through shopping cart items
        foreach($_SESSION["shopping_cart"] as $keys => $values) {
            // Process each item...
            $order_id = 1; // Assuming order ID is fixed for now
            $pid = $values["item_id"];
            $quantity = $values["item_quantity"];
            $price = $values["item_price"];

            // Insert data into Order_Table
            // Note: This is a simplified example. Use prepared statements to prevent SQL injection.
            $sql = "INSERT INTO Order_Table (order_id, pid, quantity, price) VALUES ($order_id, $pid, $quantity, $price)";

            // Execute SQL statement
            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        // Clear shopping cart after placing order
        unset($_SESSION["shopping_cart"]);
        echo '<script>alert("Your order has been placed successfully!")</script>';
        echo '<script>window.location="shop.php"</script>';
    } else {
        // Handle case where shopping cart is empty
        echo "Shopping cart is empty!";
    }
} else {
    // Handle case where form is not submitted
    echo "Form is not submitted!";
}
?>