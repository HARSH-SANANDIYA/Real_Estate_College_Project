<?php
include('connection.php');
$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
if ($full_name != '' && $phone_number != '') {
    $update_details = "INSERT INTO `list_properties`(`name`, `phone_number`) VALUES ('$full_name','$phone_number')";
    $execute = mysqli_query($con, $update_details);
    if ($execute) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}