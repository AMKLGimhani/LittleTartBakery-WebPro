<?php
$title = "Member";
require_once 'layout/header.php'; 

if (isset($_POST['submitmembership'])) {

   // if (isset($_POST['subscription'])) {//
    
    $Subscription = $_POST['subscription']; 
    $fname = $_POST['first_name'];     
    $lname = $_POST['last_name'];
    $apartment = $_POST['apartment_no']; 
    $street = $_POST['Street'];
    $postal = $_POST['postal_code'];
    $city = $_POST['city'];
    $email = $_POST['email'];    
    $phone = $_POST['ph_no'];  
    $TnC = isset($_POST['TnC']) ? 1 : 0;
    


    include 'memberdb.php';

    if ($Subscription !== "Select one from the list") { 
    
    $sql = "INSERT INTO Membership (subscription, first_name, last_name, apartment_no, street, postal_code, city, email, ph_no, TnC)
            VALUES ('$Subscription', '$fname', '$lname', '$apartment', '$street', '$postal', '$city', '$email', '$phone', '$TnC')";

    

    if ($conn->query($sql) === TRUE) {
        
        echo "<h2>Subscription Succcessfully added.</h2>";
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} else {
    echo '<h2 style="color: red;">Please select a valid subscription type.</h2>' ;
}
    


$conn->close();
    

}


require_once 'layout/footer.php';
?>