<?php
$title = "Update and Delete";
require_once 'dmemberdb.php';
require_once 'layout/header.php';


if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    echo "<script>alert('Sucessfully Updated!!!');</script>";
}

if(isset($_GET['review_id'])) {
    $review_id = $_GET['review_id'];

    
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
                    <input type="number" class="form-control" placeholder="Rating" min="1" max="5" name="rating" required value="<?php echo htmlspecialchars($row['rating']); ?>">
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
        </form><br><br>

 
<?php
        
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
                echo "<h2>Review information deleted successfully.</h2>";
               
            } else {
                echo "<h2>Error deleting review information: </h2>" . mysqli_error($conn);
            }
        }
    } else {
        echo "<h2>Review not found.</h2>";
    }
} else {
    echo "<h2>Review ID not provided.</h2>";
}
include 'layout/footer.php';
?>
