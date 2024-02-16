<?php
$title = "Cake Tasting";
require_once 'layout/header.php'; 
?>

<html>
<body>
<h2 class="text-center" >Cake Tasting Heaven</h2><br>
<h3 class="text-center" >"Indulge in a Flavorsome Culinary Experience!"</h3>

  <h5 class="text-center"> Join us for a delightful journey through flavors and textures.<br>
  Choose a time slot that suits your taste buds and let the magic of our cakes captivate your senses."</h5><br><br>
  
  <form name="formTasting" method="post" action="appointment_handler.php">
    
    <div class="form-tasting">
        <div class="row">

            <div class="col-md-7">
            <h3 class="text-center" >"Book Your Appointment Here!"</h3><br>
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required style="border: solid 1px rgb(238, 116, 116);"><br>
               
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@example.com" required style="border: solid 1px rgb(238, 116, 116);"><br>


                <label for="tp">Telephone No:</label>
                <input type="text" class="form-control" id="tp" placeholder="Enter your telephone no" name="tp" required style="border: solid 1px rgb(238, 116, 116);"><br>

                <div class="row">
                    <div class="col-md-6">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control" id="date" placeholder="date" name="date" required style="border: solid 1px rgb(238, 116, 116);"><br>
                    </div>
                    <div class="col-md-6">
                        <label for="time">Time:</label>
                        <input type="time" class="form-control" id="time" placeholder="time" name="time" required style="border: solid 1px rgb(238, 116, 116);"><br>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Schedule Appointment</button>
                <a href="appointment_update.php" class="btn btn-danger" style="width: 200px; height: 60px;">Update Appointment</a>


            </div>
            <div class="col-md-5">
                <div class="cakeTastingPic">
                    <img class="img-fluid" src="Pictures\tasting.jpg"  style="width: 500px; height: auto">
                </div>
            </div>
        </div>

    </div>
   
  </form>
</body>
</html>

<script>

//function to validate name
function validateName() {
    const name = document.getElementById("name").value;
    const nameError = document.getElementById("nameerror");

    if (name.length < 3 || name.length > 20) {
    nameError.innerHTML = "Name must be between 3 to 20 characters";
    return false;
    }

    else {
    nameError.innerHTML = "";
    return true;
    }
}


//function to validate email
function validateEmail() {
    const emailValue = document.getElementById("email").value;
    const emailError = document.getElementById("emailerror");

    if (emailValue.length === 0 || !emailValue.includes("@")) {
    emailError.innerHTML = "Please enter a valid email address";
    return false;
    } 
    else {
    emailError.innerHTML = "";
    return true;
    }
}

//function to validate phone_num
function validatePhone() {
    const tp = document.getElementById("tp").value;
    const tpError = document.getElementById("tperror");

    if (tp.length < 13 || ph_no.length > 13) {
        tpError.innerHTML = "Phone number must always be 12 digits";
        return false;
    } 
    else {
        tpError.innerHTML = "";
        return true;
    }
}

//event listners for real time validation
document.getElementById("name").addEventListener("input", validateName);
document.getElementById("email").addEventListener("input", validateEmail);
document.getElementById("tp").addEventListener("input", validatePhone);
</script>


<?php require_once 'layout/footer.php'; ?>
