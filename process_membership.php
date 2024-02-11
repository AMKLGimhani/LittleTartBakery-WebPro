<?php

if (isset($_POST['submitmembership'])) {
    
    $Subscription = $_POST['Subscription']; 
    $fname = $_POST['first_name'];     
    $lname = $_POST['last_name'];
    $apartment = $_POST['apartment_no']; 
    $street = $_POST['Street'];
    $postal = $_POST['postal_code'];
    $city = $_POST['city'];
    $email = $_POST['email'];    
    $phone = $_POST['ph_no'];      


    
    include 'dbmember.php';

    
    $sql = "INSERT INTO Membership (subscription, first_name, last_name, apartment_no, street, postal_code, city, email, ph_no)
            VALUES ('$Subscription', '$fname', '$lname', '$apartment', '$street', '$postal', '$city', '$email', '$phone')";

    
    if ($conn->query($sql) === TRUE) {
        
        echo "Subscription Succcessfully added added";
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>