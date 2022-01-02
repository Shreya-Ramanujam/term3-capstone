<?php
$connection = mysqli_connect("localhost","root","","enrollment_form");
$input = mysqli_query($connection, "DELETE FROM patient_details ORDER BY id DESC limit 1");

if($input){
    echo "Thank you for ordering pizza";
}else{
    echo "Unable to delete your appointment. Please try again.";
}
?>