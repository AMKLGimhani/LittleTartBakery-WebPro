<?php
include 'layout/header.php';
?>
<h2>Customer Registration Form:</h2>
<form name="customer form" method="post" action="process_customer.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="member_id">Membership Number:</label>
                <input type="number" class="form-control" id="membership_id" placeholder="Enter your Membership Id" name="membership_id">
            </div>
            <div class="col">
                <label for="fname">Last Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="lname">First Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your Last name" name="lname" required>
            </div>
            <div class="col">
                <label for="apartment_no">Apartment Number:</label>
                <input type="text" class="form-control" id="apartment_no" placeholder="Apartment No:" name="apartment_no" required>
            </div>
            <div class="col">
                <label for="fname">Last Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="fname">Last Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="fname">Last Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="fname">Last Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="fname">Last Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="customer_form_submit">Submit</button>
</form>


<?php
include 'layout/footer.php';
?>