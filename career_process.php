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
        
        echo "<span style='font-size: 25px';>Thank you!</span> <br> Application submitted successfully.";
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}

if (isset($_POST['update'])) {

    
    
    $Positions = $_POST['OpenPositionsN']; 
    $f_name = $_POST['fnameN'];     
    $l_name = $_POST['lnameN'];
    $ageN = $_POST['ageN']; 
    $apartmentAdd = $_POST['apartmentDetaisN'];
    $cityN = $_POST['cityN'];
    $email = $_POST['emailAddN'];
    $tel = $_POST['tpN'];    
    $qua = $_POST['pqN'];      
    $workingex = $_POST['workingN']; 

    if (isset($_POST['applicant_id'])) {
        $a = $_POST['applicant_id'];
        
        include 'dbcareer.php';

    
        $sql = "UPDATE career SET 
            applicant_id = '$a'
            position = '$Positions', 
            first_name = '$f_name', 
            last_name = '$l_name', 
            age = '$ageN', 
            apartmentNo_street = '$apartmentAdd', 
            city = '$cityN', 
            email = '$email', 
            tel_no = '$tel', 
            qualification = '$qua', 
            experience = '$workingex' 
            WHERE applicant_id = '$a'";


        
        if ($conn->query($sql) === TRUE) {
            
            echo "<span style='font-size: 25px';>Thank you!</span> <br> Application updated successfully.";
        } else {
            
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Error: Applicant ID is not set.";
    }    
    
    
}

require_once 'layout/footer.php';
?>