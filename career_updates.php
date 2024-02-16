<?php
$title = "careerupdate";
require_once 'layout/header.php';
require_once 'dbcareer.php';
$a = $_GET['applicant_id'];
$result = mysqli_query($conn,"SELECT * FROM career WHERE applicant_id= '$a'");
$row= mysqli_fetch_array($result);
?>
<h2> Update applicant information below: </h2>
<form name= "careerupdateform" method="post" action="">
  <div class="row">
    <div class="col-md-7">
      <label for="OpenPositionsN">Open Positions:</label>
      <select class="form-control" name="OpenPositionsN" required style="border: solid 1px rgb(238, 116, 116);">
        <option value="" disabled>Select position</option>
        <option value="Baker" <?php if ($row['position'] == 'Baker') echo 'selected'; ?>>Baker</option>
        <option value="CakeDecorator" <?php if ($row['position'] == 'CakeDecorator') echo 'selected'; ?>>Cake Decorator</option>
        <option value="CustomerService" <?php if ($row['position'] == 'CustomerService') echo 'selected'; ?>>Customer Service Representative</option>
      </select>

      <label for="fnameN">First Name:</label>
      <input type="text" class="form-control" id="fnameN" placeholder="First name" name="fnameN" required style="border: solid 1px rgb(238, 116, 116);" value="<?php echo $row['first_name']; ?>"><br>
      <span id="firstNameerror" style="color: red"> </span><br>

      <label for="lnameN">Last Name:</label>
      <input type="text" class="form-control" id="lnameN" placeholder="Last name" name="lnameN" required style="border: solid 1px rgb(238, 116, 116);" value="<?php echo $row['last_name']; ?>" ><br>
      <span id="lastNameerror" style="color: red"> </span><br>

      <label for="ageN">Age:</label>
      <input type="number" class="form-control" id="ageN" placeholder="age" name="ageN" required min="18" max="55" style="border: solid 1px rgb(238, 116, 116);"   value="<?php echo $row['age']; ?>">
      <span id="ageerrorU" style="color: red"> </span><br>

      <label for="apartmentDetaisN">Apartment No & Street:</label>
      <input type="text" class="form-control" placeholder="apartmentNo_street" name="apartmentDetaisN" required style="border: solid 1px rgb(238, 116, 116);" value="<?php echo $row['apartmentNo_street']; ?>"><br>    
      
      <label for="cityN">City:</label>
      <input type="text" class="form-control" placeholder="city" name="cityN" required style="border: solid 1px rgb(238, 116, 116);" value="<?php echo $row['city']; ?>"><br>

      <label for="emailAddN">Email:</label>
      <input type="email" class="form-control" placeholder="email" name="emailAddN" required style="border: solid 1px rgb(238, 116, 116);" value="<?php echo $row['email']; ?>"><br>

      <label for="tpN">Telephone No:</label>
      <input type="text" class="form-control" placeholder="tp" name="tpN" required style="border: solid 1px rgb(238, 116, 116);" value="<?php echo $row['tel_no']; ?>"><br><br>

      <label for="pqN">Professional Qualifications:</label>
      <textarea class="form-control" placeholder="qualifications" name="pqN" required style="border: solid 1px rgb(238, 116, 116);"><?php echo $row['qualification']; ?></textarea><br>

      <label for="workingN">Working Experience:</label>
      <textarea class="form-control" placeholder="experience" name="workingN" required style="border: solid 1px rgb(238, 116, 116);"><?php echo $row['experience']; ?></textarea><br>

      <button type="submit" class="btn btn-primary" name="update" >Update Applicant Information</button>
      <button type="submit" class="btn btn-primary" name="delete">Delete Applicant Information</button><br><br>

    </div>
    <div class="col-md-5">
      <img class="img-fluid" src="Pictures\update.png" alt="Little Tart Bakery main cake" style="height: 720px; width:720px">
    </div>
  </div>

</form>

<script>
  function validateFNameU(){
          const fnameN= document.getElementById("fnameN").value;
          const nameErrorU = document.getElementById("firstNameerror");

          if(fnameN.length < 3 || fnameN.length > 25){
              nameErrorU.innerHTML = "First name must be between 3 to 25 characters";
              return false;
          }
          else{
              nameErrorU.innerHTML = "";
              return true;
          }

      }

  function validateLNameU(){
      const lnameN= document.getElementById("lnameN").value;
      const lnameErrorU = document.getElementById("lastNameerror");

      if(lnameN.length < 3 || lnameN.length > 25){
          lnameErrorU.innerHTML = "Last name must be between 3 to 25 characters";
          return false;
      }
      else{
          lnameErrorU.innerHTML = "";
          return true;
      }

  }

  function validateAgeU(){
      const ageN= document.getElementById("ageN").value;
      const ageErrorU = document.getElementById("ageerrorU");

      if(ageN < 55 || ageN > 18){
          ageErrorU.innerHTML = "Applicants must be between 18 and 50 years old to apply for these positions.";
          return false;
      }
      else{
          ageErrorU.innerHTML = "";
          return true;
      }

  }
    
  document.getElementById("fnameN").addEventListener("input", validateFNameU);
  document.getElementById("lnameN").addEventListener("input", validateLNameU);
  document.getElementById("ageN").addEventListener("input", validateAgeU);

</script>


<?php 

if (isset($_POST['update'])){
    
    $Positions = $_POST['OpenPositionsN']; 
    $f_name = $_POST['fnameN'];     
    $l_name = $_POST['lnameN'];
    $ageN = $_POST['ageN']; 
    $apartmentAdd = $_POST['apartmentDetaisN'];
    $cityN = $_POST['cityN'];
    $email = $_POST['emailAddN'];
    $tel = $_POST['tpN'];    
    $qua = $_POST['pqN'];      
    $workingex = $_POST['workingN']; 

    $query = mysqli_query($conn,"UPDATE career set position = '$Positions', first_name = '$f_name', last_name = '$l_name', age = '$ageN', apartmentNo_street = '$apartmentAdd', 
    city = '$cityN', email = '$email', tel_no = '$tel', qualification = '$qua', experience = '$workingex' where applicant_id='$a'");
    
    if($query){      
?>
    <script> 
      window.alert("Applicant Information Was Updated Successfully") 
      window.location="career_read.php"
    </script>
<?php 
    }
    else { echo "Record Not modified";}
  }

if (isset($_POST['delete'])){
    $query = mysqli_query($conn,"DELETE FROM career where applicant_id='$a'");
    
    if($query){
      echo "<h2>Record Deleted with id: $a <br></h2>";
?>
      <script> 
      window.alert("Applicant Record  Was Deleted Successfully")
      window.location="career_read.php" 
      </script>
<?php
    }
    else { echo "Record Not Deleted";}
  }

$conn->close();
require_once 'layout/footer.php';
?>