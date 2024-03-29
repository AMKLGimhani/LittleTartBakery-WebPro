<?php 
$title = "Membership";
require_once 'layout/header.php'; ?>


    <div class="row">
        <img class="club" src="Pictures/ClubBanner.jpg" alt="club banner">
    </div>

    <div class="row memberheading">
        <h2>Why Join the club?</h2>
    </div>

    <div class="row intro">
            <div class="col-md-4">
                <div class="delivery">
                    <img class="imgdelivery" src="Pictures/delivery.png" alt="delivery icon">
                    <div class="captiondelivery"><h3>Free Nationwide Shipping</h3> Become a member with no added fees at checkout! We ship anywhere within the country.</div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="gift">
                    <img class="imggift" src="Pictures/gift.png" alt="gift icon">
                    <div class="captiongift"><h3>Surprise Treats</h3> Each box contains special cake/cupcakes and monthly surprise desserts!</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="calender">
                    <img class="imgcalender" src="Pictures/calender.png" alt="calender icon"><br>
                    <div class="captioncalender"><h3>Flexible Dates</h3>Choose between the second or third Thursday of each month to receive your sweet delivery.</div>
                </div>
            </div>
    </div>

    <form name="formmember" method="post" action="member_process.php">
    
    <div class="form-group">
        <div class="row">
                <label for="subscription">Subscription Type:</label>
                <select class="form-control" id="subscription" name="subscription" required>
                    <option value="" disabled selected hidden> Select one from the list</option>
                    <option value="Silver">Silver Subscription (For 3 months)</option>
                    <option value="Gold">Gold Subscription (For 6 months)</option>
                    <option value="Platinum">Platinum Subscription (For 12 months)</option>
                </select><br>
                

                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter your first name" name="first_name" required minlength="3" maxlength="20"><br>
                <span id="first_nameerror"> </span>

                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter your last name" name="last_name" required minlength="3" maxlength="50"><br>
                <span id="last_nameerror"> </span>

                <label for="apartmentNo">Apartment No:</label>
                <input type="text" class="form-control" id="apartment_no" placeholder="Enter your apartment no" name="apartment_no" required><br>

                <label for="Street">Street:</label>
                <input type="text" class="form-control" id="Street_no" placeholder="Enter your street" name="Street" required><br>
                
                <label for="postalcode">Postal code:</label>
                <input type="text" class="form-control" id="postal_code" placeholder="Enter your Postal code" name="postal_code" required><br>

                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required><br>

                <label for="emailAdd">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" required><br>
                <span id="emailerror"> </span>

                <label for="tp">Telephone No:</label>
                <input type="text" class="form-control" id="ph_no" placeholder="Enter your telephone no" name="ph_no" required><br>
                <span id="ph_noerror"> </span>
    

            <br><br>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="TnC" id="flexCheckDefault" required>
                <label class="form-check-label" for="flexCheckDefault">
                <a class="nav-link" href="#">Agree to Terms and Conditions</a>
                </label>
            </div>
            <div class="row">
            <div class="col"><button type="submit" class="btn btn-primary" name="submitmembership">Submit</button></div>
            </div>
        </div>
    </div>

    <script>

            //function to validate first_name
        function validateName() {
        const first_name = document.getElementById("first_name").value;
        const nameError = document.getElementById("first_nameerror");

        if (first_name.length < 3 || first_name.length > 20) {
            nameError.innerHTML = "Name must be between 3 to 20 characters";
            return false;
        }
        
    else {
            nameError.innerHTML = "";
            return true;
        }
    }

        //function to validate last_name
        function validateLastName() {
        const last_name = document.getElementById("last_name").value;
        const lastNameError = document.getElementById("last_nameerror");

        if (last_name.length < 3 || last_name.length > 20) {
            lastNameError.innerHTML = "Name must be between 3 to 50 characters";
            return false;
        } else {
            lastNameError.innerHTML = "";
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
            const ph_no = document.getElementById("ph_no").value;
            const ph_noError = document.getElementById("ph_noerror");

            if (ph_no.length < 13 || ph_no.length > 13)
                {
                 ph_noError.innerHTML = "Phone number must always be 12 digits";
                return false;
                } 
             else      {
                            ph_noError.innerHTML = "";
                            return true;
                         }
}

            //event listners for real time validation
            document.getElementById("first_name").addEventListener("input", validateName);
            document.getElementById("last_name").addEventListener("input", validateLastName);
            document.getElementById("email").addEventListener("input", validateEmail);
            document.getElementById("ph_no").addEventListener("input", validatePhone);
    </script>


<?php require_once 'layout/footer.php'; ?>