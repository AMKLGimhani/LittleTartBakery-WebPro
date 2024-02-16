<?php
$title = "Admin view";
require_once 'layout/header.php';
?>

<h2>Admin Page</h2><br>
<div class="row">
    <div class="col-md-6">
        <br><br><a href="career_read.php" class="btn btn-danger">View Received Career Appications</a><br><br>
        <a href="member_read.php" class="btn btn-danger">View Membership Details</a><br><br>
        <a href="appointment_read.php" class="btn btn-danger">View Scheduled Appointments for Sweet Tasting</a>

    </div>
    <div class="col-md-6">
        <img class="img-fluid" src="Pictures\admin.png" alt="adminpic" style="height: 500px; width:500px">
    </div>

    

</div>

<?php
require_once 'layout/footer.php';
?>