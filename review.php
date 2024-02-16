<?php
$title = "Customer Review";
<<<<<<< Updated upstream
require_once 'layout/header.php';
require_once 'memberdb.php';
=======
include 'layout/header.php';
include 'dbcareer.php';
>>>>>>> Stashed changes

?><br><br>
<div class="row">   
<div class='col-md-6'>
<h2>Enter Your Review</h2><br><br>
    <form name = "myForm" action="review_process.php" method="post" onsubmit="return validateForm()">
        
        <label for="customer_name">Your Name:</label>
        <input type="text" id="customer_name" name="customer_name" required><br><br>
        <span id="customer_nameerror"> </span>

        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required><br><br>

        <label for="review_text">Review:</label><br>
        <textarea id="review_text" name="review_text" style="height: 115px; width :420px;"></textarea><br><br>

        <input type="submit" value="Submit Review">
    </form><br><br>
</div>

 

<div class='col-md-6'>
    <img src="Pictures/review4.jpg" alt="">
     
</div>  





<script>
function validateForm() {

  customer_name= document.forms["myForm"]["fname"].value;
  if (customer_name == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>



<?php
//Read data 

$sql = "SELECT review_id, customer_name, rating, review_text, review_date FROM review order by review_date desc";

 

$result = $conn->query($sql);
 
if($result->num_rows> 0)
{
   $col=1;
    while($row = $result->fetch_assoc())
 
    {
        if ($col==1)
        {
             echo "<div class = 'row'>";
        }
      
        echo "<div class='col-md-4' style='width: 18rem;'>";

                $rates= $row["rating"];

                echo "<div class='acards'>";
                echo "<div class='card-headers'>" ;
                echo "<q>" .$row["review_date"] . "</q><br><br>";

                echo "<a href='review_updatesingle.php?review_id={$row['review_id']}'>{$row['customer_name']}</a>";
                
                //star icons based on the rating of the review
                for($i=1; $i<=$rates; $i++)

                {

                echo"<span class='fa fa-star checked'></span>";

                }
                echo  "</div>";
                echo " <div class='acard-bodys'>";
                echo " <blockquote class='blockquote mb-0'>";

                echo "<q>" .$row["review_text"] . "</q><br><br>";

                echo "<p>". "-" . $row["customer_name"] . "</p><br><br>";
                echo " </blockquote>";
                echo "</div>";
                echo "</div>";
                echo "</div>"; 
        
        //grid layout is maintained by closing the current grid row and starting a new one if necessary
        $col++;
        if ($col==4)
        {
            $col=1;
        }

        if ($col==1)
        {
        echo "</div>"; 
        }  
        
    }
    
}

else
{
    echo "No Reviews Yet.";
}

$conn->close();

?><br><br>
   
<?php
include 'layout/footer.php';
?>