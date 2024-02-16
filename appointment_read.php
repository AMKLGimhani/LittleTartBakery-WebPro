<?php
$title = "Sceduled Appointments";
require_once 'header.php';
require_once 'dbshop.php';
?>

<h2 class="text-center">Scheduled appointments</h2>

<?php

$sql = "SELECT * FROM appointments";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='table-responsive'>
            <table class='table table-sm'>
            <thead>
                <tr>
                    <th>Appointment Id</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Telephone Number</th>
                    <th>Scheduled Date</th>
                    <th>Scheduled Time</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='appointment_update.php?appointment_id={$row['appointment_id']}'>{$row['appointment_id']}</a></td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['tp']}</td>
                <td>{$row['date']}</td>
                <td>{$row['time']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} 
else 
    {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>