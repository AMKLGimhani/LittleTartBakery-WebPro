<?php
$title = "memberupdate";
require 'layout/header.php';
require 'memberdb.php';
$a = $_GET['member_id'];
$result = mysqli_query($conn, "SELECT * FROM Membership WHERE member_id = '$a'");
$row= mysqli_fetch_array($result);
?>


<h2> Update memebership information below: </h2>
<form name= "formmember" method="post" action="">
  <div class="row">
      <label for="subscription">Subscription Type:

      </label>
      <select class="form-control" id="subscription" name="subscriptions" require>
          <option selected>Select one from the list</option>
          <option value="Silver"<?php if ($row['subscription'] == 'SilverSubscription') echo 'selected'; ?>>Silver Subscription (For 3 months)</option>
          <option value="Gold" <?php if ($row['subscription'] == 'GoldSubscription') echo 'selected'; ?>>Gold Subscription (For 6 months)</option>
          <option value="Platinum" <?php if ($row['subscription'] == 'PlatinumSubscription') echo 'selected'; ?>>Platinum Subscription (For 12 months)</option>
      </select><br>

        <label for="first_namen">First Name:</label>
        <input type="text" class="form-control" id="first_name" placeholder="Enter your first name" name="first_namen" required minlength="3" maxlength="20" value="<?php echo $row['first_name']; ?>"> <br>
        
        <label for= "last_namen">Last Name:</label>
        <input type="text" class="form-control" id="last_name" placeholder="Enter your last name" name="last_namen" required minlength="3" maxlength="50" value="<?php echo $row['last_name']; ?>"><br>
              
        <label for="apartment_nom">Apartment No:</label>
        <input type="text" class="form-control" id="apartment_no" placeholder="Enter your apartment no" name="apartment_nom" required value="<?php echo $row['apartment_no']; ?>"><br>

        <label for="Streetn">Street:</label>
        <input type="text" class="form-control" id="Street_no" placeholder="Enter your street" name="Streetn" required value="<?php echo $row['street']; ?>"><br>
                
        <label for="postal_coden">Postal code:</label>
        <input type="text" class="form-control" id="postal_code" placeholder="Enter your Postal code" name="postal_coden" required value="<?php echo $row['postal_code']; ?>"><br>

        <label for="cityn">City:</label>
        <input type="text" class="form-control" id="city" placeholder="Enter your city" name="cityn" required value="<?php echo $row['city']; ?>"><br>

        <label for="emailadd">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter your email" name="emailadd" required value="<?php echo $row['email']; ?>"><br>
        
        <label for="ph_nom">Telephone No:</label>
        <input type="text" class="form-control" id="ph_no" placeholder="Enter your telephone no" name="ph_nom" required value="<?php echo $row['ph_no']; ?>"><br>
      
        <br><br>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" name="TnCN" id="flexCheckDefault" required value="<?php echo $row['TnC']; ?>">
          <label class="form-check-label" for="flexCheckDefault">
          <a class="nav-link" href="#">Agree to Terms and Conditions</a>
          </label>
        </div>

        <button type="submit" class="btn btn-primary" name="update" >Update Membership Information</button>
        <button type="submit" class="btn btn-primary" name="delete">Delete Membership Information</button><br><br>
        
  </div>

</form>


<?php 

if (isset($_POST['update'])){
    
    
  $Subscriptions = $_POST['subscriptions']; 
  $f_name = $_POST['first_namen'];     
  $l_name = $_POST['last_namen'];
  $apartmentN = $_POST['apartment_nom']; 
  $streetN = $_POST['Streetn'];
  $postalC = $_POST['postal_coden'];
  $cityN = $_POST['cityn'];
  $emailA = $_POST['emailadd'];    
  $tp = $_POST['ph_nom'];  
  $TnCN = isset($_POST['TnCN']) ? 1 : 0;


    $query = mysqli_query($conn,"UPDATE Membership set subscription = '$Subscriptions', first_name = '$f_name', last_name = '$l_name', apartment_no = '$apartmentN', street = '$streetN', 
    postal_code = '$postalC', city = '$cityN', email = '$emailA', ph_no = '$tp', TnC = '$TnCN' where member_id='$a'");
    if($query){
      echo "<h2>Your information is updated Successfully</h2>";
      
    }
    else { echo "Record Not modified";}
    }

    if (isset($_POST['delete'])){
        $query = mysqli_query($conn,"DELETE FROM Membership where member_id='$a'");
        if($query){
            echo "<h2>Record Deleted with id: $a <br></h2>";
        }
        else { echo "Record Not Deleted";}
        }

$conn->close();
include 'layout/footer.php';
?>