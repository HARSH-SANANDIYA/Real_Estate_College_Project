<?php
include("profile.php");
?>
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
				</div>
			</div>
		</div>
	</section>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Residential Properties</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body" style="overflow-x:auto;width:100%">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Id</th>
									<th>Client's Name</th>
									<th>Client's Email</th>
									<th>Client's Mobile</th>
									<th>Name</th>
									<th>Address</th>
									<th>Property Type</th>
									<th>Bedroom</th>
									<th>Bathroom</th>
									<th>Balconies</th>
									<th>Area</th>
									<th>Bhk</th>
									<th>Rent</th>
									<th>Available From</th>
									<th>Description</th>
									<th>Property Age</th>
									<th>Tenant Type</th>
									<th>Features</th>
									<th>Furnishing</th>
									<th>Image 1</th>
									<th>Image 2</th>
									<th>Image 3</th>
									<th>Image 4</th>
									<th>Image 5</th>
									<th>Image 6</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php
                                $email = $_SESSION['email'];
                                $sql = "SELECT id FROM login where email = '$email' ";
                                $execute = mysqli_query($con,$sql);
                                $fetch = mysqli_fetch_array($execute);
                                $login_idr = $fetch['id'];

                                
                                $query = "SELECT *
                                FROM properties c
                                JOIN properties_details cp ON c.id = cp.property_id
                                JOIN login l ON l.id = c.user_id
                                WHERE c.verify = 0
                                AND l.id = $login_idr
                                ORDER BY c.id DESC";
                                $execute = mysqli_query($con, $query);

								$i = 1;
								while ($fetch = mysqli_fetch_array($execute)) {
									
								?>
								
									<tr>
										<td>
											<?php echo $i; ?>
										</td>
										<td>
											<?php echo $fetch['clients_name'];  ?>
										</td>
										<td>
											<?php echo $fetch['clients_email']; ?>
										</td>
										<td>
											<?php echo $fetch['clients_mobile_no']; ?>
										</td>
										<td>
											<?php echo $fetch['name']; ?>
										</td>

										<td>
											<?php echo $fetch['address']; ?>
										</td>
										<td>
											<?php echo $fetch['property_type']; ?>
										</td>
										<td>
											<?php echo $fetch['bed']; ?>
										</td>
										<td>
											<?php echo $fetch['bath']; ?>
										</td>
										<td>
											<?php echo $fetch['balconies']; ?>
										</td>
										<td>
											<?php echo $fetch['sqrt']; ?>
										</td>

										<td>
											<?php echo $fetch['bhk']; ?>
										</td>
										<td>
											<?php echo $fetch['rent']; ?>
										</td>
										<td>
											<?php echo $fetch['available_from']; ?>
										</td>
										<td>
											<?php echo substr($fetch['description'], 0, 10) . "..."; ?>
											<!-- <button class="btn btn-danger see-more" data-description="<?php echo $fetch['description']; ?>">See More</button> -->
										</td>
										<td>
											<?php echo $fetch['property_age']; ?>
										</td>

										<td>
											<?php echo $fetch['tenant_type']; ?>
										</td>
										<td>
											<?php echo $fetch['property_feature']; ?>
										</td>

										<td>
											<?php echo $fetch['furnishing']; ?>
										</td>
										<td>
											<img src="<?php echo $url . '/' . $fetch['image1']; ?>" width='100%'>
										</td>

										<td>
											<img src="<?php echo $url . '/' . $fetch['image2']; ?>" width='100%'>
										</td>

										<td>
											<img src="<?php echo $url . '/' . $fetch['image3']; ?>" width='100%'>
										</td>

										<td>
											<img src="<?php echo $url . '/' . $fetch['image4']; ?>" width='100%'>
										</td>

										<td>
											<img src="<?php echo $url . '/' . $fetch['image5']; ?>" width='100%'>
										</td>

										<td>
											<img src="<?php echo $url . '/' . $fetch['image6']; ?>" width='100%'>
										</td>

										<td><a href="delete_user_profile_residential.php?id=<?php echo $fetch['property_id']; ?>" class="btn btn-danger">Delete</a>
									</tr>
								<?php
								$i++;}
								?>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->

			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	
	
<?php
	// if (isset($_POST['submit'])) {
	// 	$name = $_POST['name'];
	// 	$address = $_POST['address'];
	// 	$property_type = $_POST['property_type'];
	// 	$bed = $_POST['bed'];
	// 	$bath = $_POST['bath'];
	// 	$balconies = $_POST['balconies'];
	// 	$sqrt = $_POST['sqrt'];    
	// 	$bhk = $_POST['bhk'];
	// 	$rent = $_POST['rent'];
	// 	$available_from = $_POST['available_from'];
	// 	$description = $_POST['description'];
	// 	$property_age = $_POST['property_age'];
	// 	$tenant_type = $_POST['tenant_type'];
	// 	$property_feature = $_POST['property_feature'];
	// 	$furnishing = $_POST['furnishing'];
	// 	$image = $_POST['files'];
	// 	$check1 = '';
	// 	if (!empty($_POST['check'])) {
	// 		foreach ($_POST['check'] as $check) {
	// 			if ($check1 == '') {
	// 				$check1 = $check;
	// 			} else {
	// 				$check1 = $check1 . ',' . $check;
	// 			}
	// 		}
	// 	}
	// 	$query = "INSERT INTO `properties`(`name`,`address`,`bed`,`bath`,`sqrt`,`bhk`,`rent`,`description`,`furnishing`,`image1`,`image2`,`image3`,`image4`,`image5`, `image6`)  VALUES ('$name','$address','$bed','$bath','$sqrt','$bhk','$rent','$description','$furnishing','$image[0]','$image[1]','$image[2]','$image[3]','$image[4]','$image[5]')";
	// 	$execute1 = mysqli_query($con, $query);
	// 	$query1 = "select id from properties order by id desc limit 1";
	// 	$execute3 = mysqli_query($con, $query1);
	// 	$fetch1 = mysqli_fetch_array($execute3);
	// 	$propertyid = $fetch1['id'];
	// 	$query2 = "INSERT INTO `properties_details`(`property_id`,`property_type`,`balconies`,`available_from`,`property_age`,`tenant_type`,`property_feature`) VALUES ('$propertyid','$property_type','$balconies','$available_from','$property_age','$tenant_type','$property_feature')";
	//  	$execute2 = mysqli_query($con, $query2);
	//  	if ($execute1 and $execute2) {
	//  		echo "<script>alert('success')</script>";
	//  	}
	// }

?>
	