<?php
$title = "Customer Review";
include 'header.php';
<<<<<<< HEAD
include 'dbcareer.php';
=======
include 'dbmember.php';
>>>>>>> fce752abe982b334ae651decd9dbd8fdc91c0b43

?><br><br>
<div class="row">   
<div class='col-md-6'>
<h2>Enter Your Review</h2><br><br>
    <form action="process_review.php" method="post">
        
        <label for="customer_name">Your Name:</label>
        <input type="text" id="customer_name" name="customer_name" required><br><br>

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

    



<?php

$sql = "SELECT customer_name, rating, review_text, review_date FROM review order by review_date desc";
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
                echo "<p>" . $row["review_date"] . "</p>";
                
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
include 'footer.php';
?>