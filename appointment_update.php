<?php
$title = "Update Appointments";
require_once 'layout/header.php';
require_once 'dbshop.php';  
?>

<?php

$a = $_GET['appointment_id'];
$result = mysqli_query($conn,"SELECT * FROM appointments WHERE appointment_id= '$a'");
$row= mysqli_fetch_array($result);

?>

<h2 style="text-center"> Update your information below: </h2>
<form name= "appointmentupdateform" method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Your Name" name="name" required value="<?php echo $row['name']; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Your e-mail" name="email" required value="<?php echo $row['email']; ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Telephone Number" name="tp" required value="<?php echo $row['tp']; ?>">
    </div>

    <div class="col">
      <input type="date" class="form-control" placeholder="New Date" name="date" required value="<?php echo $row['date']; ?>">    
    </div>

    <div class="col">
      <input type="time" class="form-control" placeholder="New Time" name="time" required value="<?php echo $row['time']; ?>">    
    </div>

  </div>
<br>
  <div class="row">
  <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update your Information</button></div>
  <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your Information</button></div>
  <div class="col"><button type="reset" class="btn btn-primary" name="reset">Clear Form</button></div>



</div>
</form>


<?php

if (isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tp = $_POST['tp'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $query = mysqli_query($conn,"UPDATE appointments set name='$name', email='$email', tp='$tp', date='$date', time='time' where appointment_id='$a'");
    if($query){
        echo "<h2>Your information is updated Successfully</h2>";
        // if you want to redirect to update page after updating
    }
    else { echo "Record Not modified";}
    }

    if (isset($_POST['delete'])){
        $query = mysqli_query($conn,"DELETE FROM appointments where appointment_id='$a'");
        if($query){
            echo "Record Deleted with id: $a <br>";
            // if you want to redirect to update page after updating
          //  header("location: appointment_update.php");
        }
        else { echo "Record Not Deleted";}
        }

$conn->close();

?>