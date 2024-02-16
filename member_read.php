<?php
$title = "Memberships";
require_once 'layout/header.php';
require_once 'memberdb.php';
?>

<h2>Little Tart Memberships</h2>

<?php

$sql = "SELECT * FROM Membership ";

$result = $conn->query($sql);

if($result->num_rows> 0)
{
    echo  "<table class='table'>
            <thead>
              <tr>
                <th>Member ID</th>
                <th>Subscription</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Apartment No</th>
                <th>Street</th>
                <th>Postal Code</th>
                <th>City</th>
                <th>Email</th>
                <th>Telephone</th>
              </tr>
            </thead>
            <tbody>";
             


    while($row = $result->fetch_assoc())
    {
        echo "<tr>
                
                <td><a href='member_update.php?member_id={$row['member_id']}'>{$row['member_id']}</a></td>
                <td>{$row['subscription']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['apartment_no']}</td>
                <td>{$row['street']}</td>
                <td>{$row['postal_code']}</td>
                <td>{$row['city']}</td>
                <td>{$row['email']}</td>
                <td>{$row['ph_no']}</td>
              </tr>";
    }
}

else
{
    echo "No Members yet.";
}
$conn->close();


?>

