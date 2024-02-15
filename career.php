<?php
$title = "career";
require_once 'layout/header.php';
?>

<h1>Explore exciting career opportunities with us!</h1><br>
<h4>Our Career section is your portal to explore job openings, internships, and opportunities to join our dynamic team. 
    From entry-level positions to leadership roles, we offer diverse opportunities across various departments. </h4><br>
<form name="formCareer" method="post" action="career_process.php">
    
    <div class="form-career">
     
        <div class="row">
            <div class="col-md-7">
                <label for="OpenPositions">Open Positions:</label>
                <select class="form-control" id="OpenPositions" name="OpenPositions" style="border: solid 1px rgb(238, 116, 116);">
                    <option selected>Select position</option>
                    <option value="Baker">Baker</option>
                    <option value="CakeDecorator">Cake Decorator</option>
                    <option value="CustomerService">Customer Service Representative</option>
                </select><br>

                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required style="border: solid 1px rgb(238, 116, 116);"><br>
                <span id="first_nameerror" style="color: red"> </span><br>

                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required style="border: solid 1px rgb(238, 116, 116);"><br>
                <span id="last_nameerror" style="color: red"> </span><br>

                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" placeholder="Enter your age" name="age" required min="18" max="55" style="border: solid 1px rgb(238, 116, 116);">
                <span id="ageerror" style="color: red"> </span><br>

                <label for="apartmentDetais">Apartment No & Street:</label>
                <input type="text" class="form-control" id="apartmentDetais" placeholder="Enter your apartment no & street" name="apartmentDetais" required style="border: solid 1px rgb(238, 116, 116);"><br>

                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required style="border: solid 1px rgb(238, 116, 116);"><br>

                <label for="emailAdd">Email:</label>
                <input type="email" class="form-control" id="emailAdd" placeholder="Enter your email" name="emailAdd" required style="border: solid 1px rgb(238, 116, 116);"><br>

                <label for="tp">Telephone No:</label>
                <input type="text" class="form-control" id="tp" placeholder="Enter your telephone no" name="tp" required style="border: solid 1px rgb(238, 116, 116);"><br>

                <label for="pq">Professional Qualifications:</label>
                <textarea name="pq" id="pq" class="paste" title="Enter manually" style="width: 100%; border: solid 1px rgb(238, 116, 116);"></textarea><br>

                <label for="working">Working Experience:</label>
                <textarea name="working" id="working" class="paste" title="Enter manually" style="width: 100%; border: solid 1px rgb(238, 116, 116);"></textarea><br>



            
                <button type="submit" class="btn btn-primary" name="submitcareer">Submit Application</button> 
            </div>

            <div class="col-md-5"> 
            <div class="careerphoto">
                <img class="img-fluid" src="Pictures\baker2.png" alt="Little Tart Bakery main cake" style="height: 720px; width:720px">
            </div>
        </div>
    </div>
        
    
</form>

<script>
    function validateFName(){
            const fname= document.getElementById("fname").value;
            const nameError = document.getElementById("first_nameerror");

            if(fname.length < 3 || fname.length > 25){
                nameError.innerHTML = "First name must be between 3 to 25 characters";
                return false;
            }
            else{
                nameError.innerHTML = "";
                return true;
            }

        }

    function validateLName(){
        const lname= document.getElementById("lname").value;
        const lnameError = document.getElementById("last_nameerror");

        if(lname.length < 3 || lname.length > 25){
            lnameError.innerHTML = "Last name must be between 3 to 25 characters";
            return false;
        }
        else{
            lnameError.innerHTML = "";
            return true;
        }

    }

    function validateAge(){
        const age= document.getElementById("age").value;
        const ageError = document.getElementById("ageerror");

        if(age < 55 || age > 18){
            ageError.innerHTML = "Applicants must be between 18 and 50 years old to apply for these positions.";
            return false;
        }
        else{
            ageError.innerHTML = "";
            return true;
        }

    }
    
        document.getElementById("fname").addEventListener("input", validateFName);
        document.getElementById("lname").addEventListener("input", validateLName);
        document.getElementById("age").addEventListener("input", validateAge);

</script>


<?php
require_once 'layout/footer.php';
?>