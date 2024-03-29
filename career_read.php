<?php
$title = "Submitted Applications";
require_once 'layout/header.php';
require_once 'memberdb.php';
?>

<h2>Applications for Open Positions</h2>

<?php

$sql = "SELECT * FROM career ";

$result = $conn->query($sql);

if($result->num_rows> 0)
{
    echo "<div class='table-responsive'>
            <table class='table table-sm'>
            <thead>
                <tr>
                    <th>Applicant ID</th>
                    <th>Position</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Apartment No & Street</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Qualification</th>
                    <th>Experience</th>
                </tr>
            </thead>
            <tbody>";

    while($row = $result->fetch_assoc())
    {
        echo "<tr>
                <td><a href='career_updates.php?applicant_id={$row['applicant_id']}'>{$row['applicant_id']}</a></td>
                <td>{$row['position']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['age']}</td>
                <td>{$row['apartmentNo_street']}</td>
                <td>{$row['city']}</td>
                <td>{$row['email']}</td>
                <td>{$row['tel_no']}</td>
                <td>{$row['qualification']}</td>
                <td>{$row['experience']}</td>
              </tr>";
            
            
    }
}
else
{
    echo "No Applications.";
}
$conn->close();

 
?>