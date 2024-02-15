<?php
include 'layout/header.php';
include 'dbcareer.php';
$a = $_GET['applicant_id'];
$result = mysqli_query($conn,"SELECT * FROM career WHERE applicant_id= '$a'");
$row= mysqli_fetch_array($result);
?>
<h2> Update your information below: </h2>
<form name= "careerupdateform" method="post" action="career_process.php?applicant_id=<?php echo $row['applicant_id']; ?>">
  <div class="row">
    <div class="col-md-7">
      
      <select class="form-control" name="OpenPositionsN" required>
        <option value="" disabled>Select position</option>
        <option value="Baker" <?php if ($row['position'] == 'Baker') echo 'selected'; ?>>Baker</option>
        <option value="CakeDecorator" <?php if ($row['position'] == 'CakeDecorator') echo 'selected'; ?>>Cake Decorator</option>
        <option value="CustomerService" <?php if ($row['position'] == 'CustomerService') echo 'selected'; ?>>Customer Service Representative</option>
      </select>

      <input type="text" class="form-control" placeholder="First name" name="fnameN" required value="<?php echo $row['first_name']; ?>">
      
      <input type="text" class="form-control" placeholder="Last name" name="lnameN" required value="<?php echo $row['last_name']; ?>" >
      
      <input type="number" class="form-control" placeholder="age" name="ageN" required value="<?php echo $row['age']; ?>">
      
      <input type="text" class="form-control" placeholder="apartmentNo_street" name="apartmentDetaisN" required value="<?php echo $row['apartmentNo_street']; ?>">    
      
      <input type="text" class="form-control" placeholder="city" name="cityN" required value="<?php echo $row['city']; ?>">

      <input type="email" class="form-control" placeholder="emailAdd" name="emailAddN" required value="<?php echo $row['email']; ?>">

      <input type="text" class="form-control" placeholder="tp" name="tpN" required value="<?php echo $row['tel_no']; ?>">

      <textarea class="form-control" placeholder="pq" name="pqN" required><?php echo $row['qualification']; ?></textarea>

      <textarea class="form-control" placeholder="working" name="workingN" required><?php echo $row['experience']; ?></textarea><br>

      <button type="submit" class="btn btn-primary" name="updaten" >Update Applicant Information</button>
      <button type="submit" class="btn btn-primary" name="delete">Delete Applicant Information</button>

      
    </div>
      <div class="col-md-5">
    
    </div>
  </div>

</form>


