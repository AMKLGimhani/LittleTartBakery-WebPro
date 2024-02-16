<?php
$title = "career";
require_once 'layout/header.php'; 

if (isset($_POST['submitcareer'])) {
    
    $OpenPositions = $_POST['OpenPositions']; 
    $fname = $_POST['fname'];     
    $lname = $_POST['lname'];
    $age = $_POST['age']; 
    $apartmentDetais = $_POST['apartmentDetais'];
    $city = $_POST['city'];
    $emailAdd = $_POST['emailAdd'];
    $tp = $_POST['tp'];    
    $pq = $_POST['pq'];      
    $working = $_POST['working']; 

    
    include 'dbcareer.php';

    
    $sql = "INSERT INTO career (position, first_name, last_name, age, apartmentNo_street, city, email, tel_no, qualification, experience)
            VALUES ('$OpenPositions', '$fname', '$lname', '$age', '$apartmentDetais', '$city', '$emailAdd', '$tp', '$pq', '$working')";

    
    if ($conn->query($sql) === TRUE) {
        
        echo "<span style='font-size: 25px';>Thank you!</span> <br> Application submitted successfully.";?>
        <script> 
        window.alert("Application submitted successfully") 
        </script>
    <?php
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}


require_once 'layout/footer.php';
?>