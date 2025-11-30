<?php
include('connection.php');
$title = $_POST['title'];
$user_idr = $_POST['user_id'];
$type = $_POST['type'];
$bhk = $_POST['bhk'];
$sqft = $_POST['sqft'];
$rent = $_POST['rent'];
$deposit = $_POST['deposit'];
$available_from = $_POST['available_from'];
$address = $_POST['address'];
$location = $_POST['location'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$description = $_POST['description'];
$property_age = $_POST['property_age'];
$bed = $_POST['bed'];
$bath = $_POST['bath'];
$balconies = $_POST['balconies'];
$furnishing = $_POST['furnishing'];
$tenant = $_POST['tenant'];
// Configure upload directory and allowed file types
$images_get = [];
$targetDir = "/var/www/html/projects/fl/Admin/images/commerical/";
$allowTypes = array('jpg', 'png', 'jpeg', 'gif');
$errorUpload = '';
$errorUploadType = '';

$fileNames = array_filter($_FILES['files']['name']);
// if (!empty($fileNames)) {
// 	foreach ($_FILES['files']['name'] as $key => $val) {
// 		$fileName = basename($_FILES['files']['name'][$key]);
// 		$targetFilePath = $targetDir . $fileName;
// 		$fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION)); // Convert to lowercase for case-insensitive comparison
// 		if (in_array($fileType, $allowTypes)) {
// 			if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
// 				$images_get[] = $fileName;
// 			} else {
// 				$errorUpload .= $_FILES['files']['name'][$key] . ' | '; // Log upload error
// 			}
// 		} else {
// 			$errorUploadType .= $_FILES['files']['name'][$key] . ' | '; // Log invalid file type error
// 		}
// 	}
// }
// echo $filepath1[0];
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$check1 = '';
if (!empty($_POST['check'])) {
	foreach ($_POST['check'] as $check) {
		if ($check1 == '') {
			$check1 = $check;
		} else {
			$check1 = $check1 . ',' . $check;
		}
	}
}

$query = "INSERT INTO `properties`(`user_id`,`clients_name`,`clients_email`,`clients_mobile_no`,`name`, `rent`, `location`,`address`, `furnishing`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `bed`, `bath`, `bhk`, `sqrt`, `description`, `verify`, `security_deposit`) VALUES ('$user_idr','$name', '$email','$contact','$title','$rent','$location', '$address','$furnishing','$fileNames[0]','$fileNames[1]','$fileNames[2]','$fileNames[3]','$fileNames[4]','$fileNames[5]','$bed','$bath','$bhk','$sqft','$description',0,'$deposit')";
$execute1 = mysqli_query($con, $query);

$query1 = "select id from properties order by id desc limit 1";
$execute3 = mysqli_query($con, $query1);
$fetch1 = mysqli_fetch_array($execute3);
$propertyid = $fetch1['id'];

$query2 = "INSERT INTO `properties_details`(`property_id`, `balconies`, `tenant_type`, `available_from`, `property_age`, `property_type`, `property_feature`, `map`) VALUES ('$propertyid','$balconies','$tenant','$available_from','$property_age','$type','$check1','null')";


$execute2 = mysqli_query($con, $query2);
// if ($execute1 and $execute2) {
	echo "success";
// }