<?php include("header.php"); ?>
<?php
// // Turn off error reporting
// error_reporting(0);

// // Report runtime errors
// error_reporting(E_ERROR | E_WARNING | E_PARSE);

// // Report all errors
// error_reporting(E_ALL);

// // Same as error_reporting(E_ALL);
// ini_set("error_reporting", E_ALL);

// // Report all errors except E_NOTICE
// error_reporting(E_ALL & ~E_NOTICE);
?>
<style>
	.error {
		color: red;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Residential</h3>
						</div>
						<form method="post" action="" id="resident_val_id" enctype="multipart/form-data">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Society Name</label>
									<input type="text" class="form-control" placeholder="Enter society Name" name="name">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Rent</label>
									<input type="number" class="form-control" placeholder="Enter Rent" name="rent">
								</div>
								<!-- <div class="form-group">
									<label for="exampleInputEmail1">Location</label>
									<input type="text" class="form-control" 
										placeholder="Enter Location" name="location">
								</div> -->
								<div class="form-group">
									<label for="exampleInputEmail1">Location</label>
									<select class="form-control" placeholder="Enter Location" name="location">
										<?php
										$localtions = "SELECT * FROM `location` ORDER BY `name` ASC";
										$sql = mysqli_query($con, $localtions);
										while ($fetch = mysqli_fetch_array($sql)) {
										?>
											<option value="<?php echo $fetch['id'] ?>"><?php echo $fetch['name'] ?></option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Address</label>
									<textarea class="form-control" placeholder="Enter Description" name="address"></textarea>
								</div>

								<!-- <div class="form-group">
									<label for="exampleInputEmail1">Latitude</label>
									<input type="text" class="form-control"  placeholder="Enter Latitude" name="latitude">
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Longitude</label>
									<input type="text" class="form-control"  placeholder="Enter Longitude" name="longitude">
								</div> -->

								<div class="form-group">
									<label for="exampleInputEmail1">Area in SQFT</label>
									<input type="number" class="form-control" placeholder="Enter SQFT" name="sqrt">
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Bed</label>
									<input type="number" class="form-control" placeholder="Enter Bedroom" name="bed">
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Bathroom</label>
									<select class="form-control" placeholder="Enter Bathroom" name="bath">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">More than 5</option>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">BHK</label>
									<select class="form-control" placeholder="Enter bHK" name="bhk">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">More than 5</option>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Balconies</label>
									<select class="form-control" placeholder="Enter Balconies" name="balconies">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">More than 5</option>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Tenant Type</label>
									<select class="form-control" placeholder="Enter Tenant Type" name="tenant">
										<option value="Family">Family</option>
										<option value="Single Person">Single Person</option>
										<option value="Bachelors">Bachelors</option>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Furnishing</label>
									<select class="form-control" name="furnishing">
										<option value="Unfurnished">Unfurnished</option>
										<option value="Semi Furnished">Semi Furnished</option>
										<option value="Full Furnished">Full Furnished</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Available From</label>
									<input type="text" class="form-control" placeholder="Enter Available From" name="availablefrom">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Property Age</label>
									<select class="form-control" name="propertyage">
										<option value="0 - 1 Years">0 - 1 Years</option>
										<option value="1 - 5 Years">1 - 5 Years</option>
										<option value="5 - 10 Years">5 - 10 Years</option>
										<option value="10 - 20 Years">10 - 20 Years</option>
										<option value="20 + Years">20 + Years</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Property Type</label>
									<select class="form-control" name="propertytype">
										<option value="Flat">Flat</option>
										<option value="Bungalow">Bungalow</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Brokerage</label>
									<input type="text" class="form-control" placeholder="Enter Security Deposit" name="deposit">
								</div>


								<div class="form-group">
									<label for="exampleInputEmail1">Description</label>
									<textarea class="form-control" placeholder="Enter Description" name="description"></textarea>
								</div>

								<input type="checkbox" name="check[]" value="Air Condition (AC)">
								<label for="Air Condition (AC)">Air Condition (AC)</label>

								<input id="Fan" type="checkbox" name="check[]" value="Fan">
								<label for="Fan">Fan</label>

								<input id="Light" type="checkbox" name="check[]" value="Light">
								<label for="Light">Light</label>

								<input id="Bed" type="checkbox" name="check[]" value="Bed">
								<label for="Bed">Bed</label>

								<input id="Stove" type="checkbox" name="check[]" value="Stove">
								<label for="Stove">Stove</label>

								<input id="Sofa" type="checkbox" name="check[]" value="Sofa">
								<label for="Sofa">Sofa</label>

								<input id="Wardrobe" type="checkbox" name="check[]" value="Wardrobe">
								<label for="Wardrobe">Wardrobe</label>

								<input id="Washing Machine" type="checkbox" name="check[]" value="Washing Machine">
								<label for="Washing Machine">Washing Machine</label>

								<input id="Water Purifier" type="checkbox" name="check[]" value="Water Purifier">
								<label for="Water Purifier">Water Purifier</label>

								<input id="Modular Kitchen" type="checkbox" name="check[]" value="Modular Kitchen">
								<label for="Modular Kitchen">Modular Kitchen</label>

								<input id="Microwave" type="checkbox" name="check[]" value="Microwave">
								<label for="Microwave">Microwave</label>

								<input id="Geyser" type="checkbox" name="check[]" value="Geyser">
								<label for="Geyser">Geyser</label>

								<input id="Fridge" type="checkbox" name="check[]" value="Fridge">
								<label for="Fridge">Fridge</label>

								<div class="form-group">
									<label for="exampleInputFile">Add upto 6 Images</label>
									<div class="input-group">
										<input type="file" class="custom-file-input" name="files[]" multiple>
										<label class="custom-file-label" for="exampleInputFile">Choose file</label>
									</div>
								</div>

							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary" name="submit">Submit</button>
							</div>
						</form>
					</div>
					</form>
				</div>
			</div>
		</div>
</div>
</div>
</section>
<div class="content-wrapper">
	<section class="content">
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
										<th>Name</th>
										<th>Location</th>
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
										<th>Security_Deposit</th>
										<!-- <th>Latitude</th>
										<th>Longitude</th> -->
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
									$query = "SELECT *, c.id AS p_id FROM properties as c LEFT JOIN properties_details as cp ON c.id=cp.property_id where c.verify=1 ORDER BY c.id DESC;";
									$execute = mysqli_query($con, $query);
									$i = 1;
									while ($fetch = mysqli_fetch_array($execute)) {
										if ($fetch['location']) {
											$lc_id = $fetch['location'];
											$location = "SELECT * FROM `location` WHERE id= $lc_id";
											$execute2 = mysqli_query($con, $location);
											$location_name = mysqli_fetch_array($execute2);
										}
									?>
										<tr>
											<td>
												<?php echo $i; ?>
											</td>
											<td>
												<?php echo $fetch['name']; ?>
											</td>

											<td>
												<?php echo $location_name['name'] ? $location_name['name'] : 'NA'; ?>
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
												<?php echo $fetch['bath'] != 6 ? $fetch['bath'] : 'More than 5';  ?>
											</td>
											<td>
												<?php echo $fetch['balconies'] != 6 ? $fetch['balconies'] : 'More than 5'; ?>
											</td>
											<td>
												<?php echo $fetch['sqrt']; ?>
											</td>

											<td>
												<?php echo $fetch['bhk'] ? $fetch['bhk'] : 'More than 5'; ?>
											</td>
											<td>
												<?php echo $fetch['rent']; ?>
											</td>
											<td>
												<?php echo $fetch['available_from']; ?>
											</td>
											<td>
												<?php echo substr($fetch['description'], 0, 20) . "..."; ?>
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
												<?php echo $fetch['security_deposit']; ?>
											</td>

											<td>
												<img src='http://localhost/real-estate/images/commerical/<?php echo $fetch['image1']; ?>' width='100%'>
											</td>

											<td>
												<img src='http://localhost/real-estate/images/commerical/<?php echo $fetch['image2']; ?>' width='100%'>
											</td>

											<td>
												<img src='http://localhost/real-estate/images/commerical/<?php echo $fetch['image3']; ?>' width='100%'>
											</td>

											<td>
												<img src='http://localhost/real-estate/images/commerical/<?php echo $fetch['image4']; ?>' width='100%'>
											</td>

											<td>
												<img src='http://localhost/real-estate/images/commerical/<?php echo $fetch['image5']; ?>' width='100%'>
											</td>

											<td>
												<img src='http://localhost/real-estate/images/commerical/<?php echo $fetch['image6']; ?>' width='100%'>
											</td>


											<td><a href="delete_residential.php?id=<?php echo $fetch['p_id']; ?>" class="btn btn-danger">Delete</a>&nbsp;&nbsp;<a href="update_residential.php?id=<?php echo $fetch['p_id']; ?>" class="btn btn-success">Edit</a></td>
										</tr>
									<?php
										$i++;
									}
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
		<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
</div>
</div>


<?php include("footer.php"); ?>
<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$rent = $_POST['rent'];
	$location = $_POST['location'];
	$address = $_POST['address'];
	// $latitude = $_POST['latitude'];
	// $longitude = $_POST['longitude'];
	$sqrt = $_POST['sqrt'];
	$bed = $_POST['bed'];
	$bath = $_POST['bath'];
	$bhk = $_POST['bhk'];
	$balconies = $_POST['balconies'];
	$tenant = $_POST['tenant'];
	$furnishing = $_POST['furnishing'];
	$availablefrom = $_POST['availablefrom'];
	$propertyage = $_POST['propertyage'];
	$deposit = $_POST['deposit'];
	$description = $_POST['description'];
	$propertytype = $_POST['propertytype'];


	$images_get = [];
	$targetDir = "/xampp/htdocs/real-estate/images/commerical/";
	$allowTypes = array('jpg', 'png', 'jpeg', 'gif');
	$errorUpload = '';
	$errorUploadType = '';

	$fileNames = array_filter($_FILES['files']['name']);
	if (!empty($fileNames)) {
		foreach ($_FILES['files']['name'] as $key => $val) {
			$fileName = basename($_FILES['files']['name'][$key]);
			$targetFilePath = $targetDir . $fileName;
			$fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION)); // Convert to lowercase for case-insensitive comparison
			if (in_array($fileType, $allowTypes)) {
				if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
					$images_get[] = $fileName;
				} else {
					$errorUpload .= $_FILES['files']['name'][$key] . ' | '; // Log upload error
				}
			} else {
				$errorUploadType .= $_FILES['files']['name'][$key] . ' | '; // Log invalid file type error
			}
		}
	}
	// echo $filepath1[0];
	// $name = $_POST['name'];
	// $email = $_POST['email'];
	// $contact = $_POST['contact'];
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

	$query = "INSERT INTO `properties`(`address`,`name`, `rent`, `location`, `furnishing`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `bed`, `bath`, `bhk`, `sqrt`, `description`, `verify`, `security_deposit`) VALUES ('$address','$name','$rent','$location','$furnishing','$images_get[0]','$images_get[1]','$images_get[2]','$images_get[3]','$images_get[4]','$images_get[5]','$bed','$bath','$bhk','$sqrt','$description',1,'$deposit')";

	$execute1 = mysqli_query($con, $query);

	$query1 = "select id from properties order by id desc limit 1";
	$execute3 = mysqli_query($con, $query1);
	$fetch1 = mysqli_fetch_array($execute3);
	$propertyid = $fetch1['id'];

	$query2 = "INSERT INTO `properties_details`(`property_id`, `balconies`, `tenant_type`, `available_from`, `property_age`, `property_type`, `property_feature`) VALUES ('$propertyid','$balconies','$tenant','$availablefrom','$propertyage','$propertytype','$check1')";
	$execute2 = mysqli_query($con, $query2);
	if ($execute1 and $execute2) {
		echo "<script>alert('success');window.location.reload();</script>";
	}
		
}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
	$(document).ready(function() {
		$("#resident_val_id").validate({
			rules: {
				name: "required",
				rent: "required",
				location: "required",
				address: "required",
				space_type: "required",
				sqrt: {
					required: true,
					digits: true
				},
				bed: "required",
				bath: "required",
				bhk: "required",
				balconies: "required",
				tenant: "required",
				deposit: "required",
				availablefrom: "required",
				lockinperiod: "required",
				description: "required",
				propertyage: "required",
				furnishing: "required",
				// cabins: "required",
				washrooms: "required",
				workstation: "required",
				floor: "required",
				"check[]": "required",
				"files[]": {
					required: true,
				}
			},
			messages: {
				name: "Please enter name",
				space_type: "Please select space type",
				sqrt: {
					required: "Please enter area",
					digits: "Please enter only digits",
				},
				rent: "Please enter rent",
				deposit: "Please select security deposit",
				availablefrom: "Please select available from",
				lockinperiod: "Please enter lock-in period",
				address: "This field is required",
				description: "Please enter property description",
				propertyage: "Please enter property age",
				furnishing: "Please select furnishing",
				// cabins: "Please select cabin",
				washrooms: "Please select washroom",
				workstation: "Please enter workstation",
				floor: "Please enter floor",
				"check[]": "Please select at least one amenity",
				"files[]": {
					required: "Please upload at least one image",
				},
			},
		});
		// $('#example2').DataTable();
	});
	// $.noConflict();
	jQuery(document).ready(function($) {
		$('#example2').DataTable();
	});
</script>