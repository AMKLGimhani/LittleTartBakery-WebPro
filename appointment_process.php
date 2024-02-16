
<?php
   
if(isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tp = $_POST['tp'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    include 'memberdb.php';

    $sql = "INSERT INTO appointments (name, email, tp, date, time) 
            VALUES ('$name', '$email',  '$tp', '$date', '$time')";

    if ($conn->query($sql) === TRUE) {
        echo "<span style='font-size: 25px';>Thank you!</span> <br> Appointment scheduled successfully.";
        //echo '<script>window.location="appointment_form.php"</script>';  //redirects the user to "process.php.
        //echo '<script>"Appointment scheduled successfully"</script>';  //redirects the user to "process.php.


    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close database connection
    $conn->close();
}
?>


