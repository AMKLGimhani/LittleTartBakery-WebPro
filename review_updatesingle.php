<?php
include 'db.php';
include 'layout/header.php';

// Check if review_id is provided in the URL
if(isset($_GET['review_id'])) {
    $review_id = $_GET['review_id'];

    // Fetch the review from the database based on review_id
    $result = mysqli_query($conn, "SELECT * FROM review WHERE review_id = '$review_id'");
    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
?>

        <h2>Update your information below:</h2>
        <form name="update" method="post" action="">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Customer Name" name="customer_name" required value="<?php echo htmlspecialchars($row['customer_name']); ?>">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Rating" name="rating" required value="<?php echo htmlspecialchars($row['rating']); ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Review Text" name="review_text" required value="<?php echo htmlspecialchars($row['review_text']); ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="submit">Update your Information</button>
                    <button type="submit" class="btn btn-primary" name="delete">Delete your Information</button>
                </div>
            </div>
        </form>

<?php
        // Handle form submission
        if(isset($_POST['submit'])){
            $customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
            $rating = mysqli_real_escape_string($conn, $_POST['rating']);
            $review_text = mysqli_real_escape_string($conn, $_POST['review_text']);

             
            $update_query = "UPDATE review SET customer_name = '$customer_name', rating = '$rating', review_text = '$review_text' WHERE review_id = '$review_id'";
            if(mysqli_query($conn, $update_query)) {
                echo "<h2>Your information is updated Successfully</h2>";
               
            } else {
                echo "Error updating review information: " . mysqli_error($conn);
            }
        }
        // Handle delete action
        elseif(isset($_POST['delete'])){
            // Delete review information from the database
            $delete_query = "DELETE FROM review WHERE review_id = '$review_id'";
            if(mysqli_query($conn, $delete_query)) {
                echo "Review information deleted successfully.";
               
            } else {
                echo "Error deleting review information: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Review not found.";
    }
} else {
    echo "Review ID not provided.";
}
include 'layout/footer.php';
?>
