<?php
include 'header.php';
?>
   <h2>Enter Your Review</h2>
    <form action="process_review.php" method="post">
        <label for="product_id">Product ID:</label>
        <input type="number" id="product_id" name="product_id" min="1" max="12" required><br><br>

        <label for="customer_name">Your Name:</label>
        <input type="text" id="customer_name" name="customer_name" required><br><br>

        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required><br><br>

        <label for="review_text">Review:</label><br>
        <textarea id="review_text" name="review_text" required></textarea><br><br>

        <input type="submit" value="Submit Review">
    </form>

    


 

<?php
include 'footer.php';
?>