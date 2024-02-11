<?php 
$title = "Membership";
require_once 'header.php'; ?>


    <div class="row">
        <img class="club" src="Pictures/ClubBanner.jpg" alt="club banner">
    </div>

    <div class="row memberheading">
        <h2>Why Join the club?</h2>
    </div>

    <div class="row">
            <div class="col-md-4">
                <div class="delivery">
                    <img class="imgdelivery" src="Pictures/delivery.png" alt="delivery icon"><br><p><h3>Free Nationwide Shipping</h3> <br>Become a member with no added fees at checkout! We ship anywhere within the country.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gift">
                    <img class="imggift" src="Pictures/gift.png" alt="gift icon"><br><p><h3>Surprise Treats</h3> <br>Each box contains special cake/cupcakes and monthly surprise desserts!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="calender">
                    <img class="imgcalender" src="Pictures/calender.png" alt="calender icon"><br><p><h3>Flexible Dates</h3> <br>Choose between the second or third Thursday of each month to receive your sweet delivery.</p>
                </div>
            </div>
    </div>

    <form name="formCareer" method="post" action="process_membership.php">
    
    <div class="form-group">
        <div class="row">
                <label for="Subscription">Subscription Type:</label>
                <select class="form-control" id="Subscription" name="Subscription">
                    <option selected>Select one from the list</option>
                    <option value="Silver">Silver Subscription (For 3 months)</option>
                    <option value="Gold">Gold Subscription (For 6 months)</option>
                    <option value="Platinum">Platinum Subscription (For 12 months)</option>
                </select><br>

                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter your first name" name="first_name" required><br>

                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter your last name" name="last_name" required><br>

                <label for="apartmentNo&Street">Apartment No:</label>
                <input type="text" class="form-control" id="apartment_no" placeholder="Enter your apartment no" name="apartment_no" required><br>

                <label for="apartmentNo&Street">Street:</label>
                <input type="text" class="form-control" id="Street_no" placeholder="Enter your street" name="Street" required><br>
                
                <label for="apartmentNo&Street">Postal code:</label>
                <input type="text" class="form-control" id="postal_code" placeholder="Enter your Postal code" name="postal_code" required><br>

                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required><br>

                <label for="emailAdd">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" required><br>

                <label for="tp">Telephone No:</label>
                <input type="text" class="form-control" id="ph_no" placeholder="Enter your telephone no" name="ph_no" required><br>

                <label for="tp">Preferred Communication Method:</label>
                <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Email</label>
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            </div>

            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Mobile SMS</label>
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            </div>

            <br><br>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                <label class="form-check-label" for="flexCheckDefault">
                <a class="nav-link" href="#">Agree to Terms and Conditions</a>
                </label>
            </div>

                <button type="submit" class="btn btn-primary" name="submitmembership">Submit</button>
        </div>
    </div>





<?php require_once 'footer.php'; ?>