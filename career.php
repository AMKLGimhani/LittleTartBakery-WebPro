<?php
$title = "career";
require_once 'header.php';
?>

<h1>Join Our Team</h1><br>
<form name="formCareer" method="post" action="process_career.php">
    
    <div class="form-career">
     
        <div class="row">
            <div class="col-md-7">
                <label for="OpenPositions">Open Positions:</label>
                <select class="form-control" id="OpenPositions" name="OpenPositions">
                    <option value="Baker">Baker</option>
                    <option value="CakeDecorator">Cake Decorator</option>
                    <option value="CustomerService">Customer Service Representative</option>
                </select><br>

                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required><br>

                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required><br>

                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" placeholder="Enter your age" name="age" required min="18" max="55">
                <p style="color: red;">Applicants must be between 18 and 50 years old to apply for these positions.</p>

                <label for="apartmentDetais">Apartment No & Street:</label>
                <input type="text" class="form-control" id="apartmentDetais" placeholder="Enter your apartment no & street" name="apartmentDetais" required><br>

                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required><br>

                <label for="emailAdd">Email:</label>
                <input type="email" class="form-control" id="emailAdd" placeholder="Enter your email" name="emailAdd" required><br>

                <label for="tp">Telephone No:</label>
                <input type="text" class="form-control" id="tp" placeholder="Enter your telephone no" name="tp" required><br>

                <label for="pq">Professional Qualifications:</label>
                <textarea name="pq" id="pq" class="paste" title="Enter manually" style="width: 100%"></textarea><br>

                <label for="working">Working Experience:</label>
                <textarea name="working" id="working" class="paste" title="Enter manually" style="width: 100%"></textarea><br>



            
                <button type="submit" class="btn btn-primary" name="submitcareer">Submit Application</button>
            </div>

            <div class="col-md-5"> 
            <div class="careerphoto">
                <img class="img-fluid" src="Pictures\baker2.png" alt="Little Tart Bakery main cake" style="height: 700px; width:700px">
            </div>
        </div>
        </div>
        
    
</form>

<script>



function validateAge() {
    const age= document.getElementById("age").value;
    const ageError= document.getElementById("ageError").value;

    if (age < 18 || age > 55){
        ageError.innerHTML = "(Applicants must be between 18 and 50 years old to apply for this position.)";
        return false;
    }
    else{
        ageError.innerHTML = "";
        return true;
    }
}

// event listeners for real time validation
document.getElementById("ageError").addEventListener("input",validateAge);

</script>





<?php
require_once 'footer.php';
?>