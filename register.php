<?php

$connection = mysqli_connect('localhost', 'root', '', 'enrollment_form');
$id = ['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname']; 
$dateofbirth = $_POST['dateofbirth'];
$sex = $_POST['sex'];
$contactnumber = $_POST['contactnumber'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$stateorprovince = $_POST['stateorprovince'];
$pincode = $_POST['pincode'];
$maritalstatus = $_POST['maritalstatus'];
$efirstname = $_POST['e_firstname'];
$elastname = $_POST['e_lastname'];
$relationship = $_POST['relationship'];
$econtact = $_POST['e_contactnumber'];
$weight = $_POST['weight'];
$height = $_POST['height'];
 
$check_data = mysqli_query($connection, 'SELECT *FROM patient_details WHERE firstname = '$firstname', lastname = '$lastname', dateofbirth = '$dateofbirth',  contactnumber = '$contactnumber', email = '$email'');
$check = mysqli_num_rows($check_data);

if($check>0){
    echo "Patient is already enrolled in the hospital";
}else{
    $input = mysqli_query($connection, 'INSERT INTO patient_details(id,firstname,lastname,dateofbirth,sex,contactnumber,email,address,city,stateorprovince,pincode,maritalstatus,e_firstname,e_lastname,relationship,e_contactnumber,weight,height) VALUES('$id','$firstname','$lastname','$dateofbirth','$sex','$contactnumber','$email','$address','$city','$stateorprovince','$pincode','$maritalstatus','$efirstname','$elastname','$relationship','$econtact','$weight','$height')');
    if($input){
        header("Location: localhost/capstone/next.html");
        exit();
    }
}

?>