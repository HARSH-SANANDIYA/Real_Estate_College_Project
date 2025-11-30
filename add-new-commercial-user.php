<?php
include('connection.php');
session_start(); 


// if(isset($_POST['submit'])){
// 	if ( empty($_SESSION['email'])) {
// 		 header("Location: login.php"); 
// 	}else{
		$user_id = $_POST['user_id'];
		$title = $_POST['title'];
		$type = $_POST['type'];
		$space_type = $_POST['space_type'];
		$Area = $_POST['Area'];
		$Carpet_Area = $_POST['Carpet_Area'];
		$rent = $_POST['rent'];
		$security_deposit = $_POST['security_deposit'];
		$available_from = $_POST['available_from'];
		$lockinperiod = $_POST['lockinperiod'];
		$address = $_POST['address'];
		$city_name = $_POST['city_name'];
		$state = $_POST['state'];
		$zip_code = $_POST['zip_code'];
		$description = $_POST['description'];
		$building_age = $_POST['building_age'];
		$furnishing = $_POST['furnishing'];
		$cabins = $_POST['cabins'];
		$washroom = $_POST['washroom'];
		$workstation = $_POST['workstation'];
		$floor = $_POST['floor'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['number'];
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

		



		$images_get = [];
		$targetDir = "/var/www/html/projects/fl/Admin/images/commerical/";
		$allowTypes = array('jpg', 'png', 'jpeg', 'gif');
		$errorUpload = '';
		$errorUploadType = '';

		$fileNames = array_filter($_FILES['files']['name']);
		


		$query = "INSERT INTO `commerical`(`user_id`,`clients_name`,`clients_email`,`clients_mobile_no`,`society_name`,`type`, `rent`, `address`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `sqft`, `cabins`, `workstation`, `washroom`,`verify`) VALUES ('$user_id','$name', '$email','$contact', '$title','$type','$rent','$address','$fileNames[0]','$fileNames[1]','$fileNames[2]','$fileNames[3]','$fileNames[4]','$fileNames[5]','$Area','$cabins','$workstation','$washroom',0)";
		// echo $query;
		$execute1 = mysqli_query($con, $query);

		$query1 = "select id from commerical order by id desc limit 1";
		$execute3 = mysqli_query($con, $query1);
		$fetch1 = mysqli_fetch_array($execute3);
		$propertyid = $fetch1['id'];

		$query2 = "INSERT INTO `commerical_details`(`property_id`, `carpet_area`, `furnishing`, `available_from`, `lock_in_period`, `description`, `property_age`, `floor`, `features`, `space_type`) VALUES ('$propertyid','$Carpet_Area','$furnishing','$available_from','$lockinperiod','$description','$building_age','$floor','$check1','$space_type')";
		$execute2 = mysqli_query($con, $query2);
		if ($execute1 and $execute2) {
			echo 'success';
		}
// 	}
// }