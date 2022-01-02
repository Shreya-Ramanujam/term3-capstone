<?php
    $con = mysqli_connect('localhost','root','','enrollment_form');
    $contactnumber = $_POST['contactnumber'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $stateorprovince = $_POST['stateorprovince'];
    $pincode = $_POST['pincode'];
    $econtact = $_POST['e_contactnumber'];

    $check_data = mysqli_query($con,"UPDATE userdata SET contactnumber = '$contactnumber', email = '$email', address = '$address', city = '$city', stateorprovince = '$stateorprovince', pincode = '$pincode' AND econtact = '$e_contactnumber'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        header("Location:http://localhost/capstone");
        echo "Data Updated Successfully"
    }
?>