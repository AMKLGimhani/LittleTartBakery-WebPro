<?php
include 'layout/header.php';
include 'dbcareer.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM career WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<h2> Update your information below: </h2>
<form name= "careerform" method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="first_name" required value="<?php echo $row['first_name']; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" name="last_name" required value="<?php echo $row['last_name']; ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="age" name="age" required value="<?php echo $row['age']; ?>">
    </div>

    <div class="col">
      <input type="text" class="form-control" placeholder="apartmentNo_street" name="apartmentNo_street" required value="<?php echo $row['apartmentNo_street']; ?>">    
    </div>

  </div>
<br>
  <div class="row">
  <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update Applicant Information</button></div>
  <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete Applicant Information</button></div>
</div>
</form>
<?php 