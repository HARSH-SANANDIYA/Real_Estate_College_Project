<?php include("header.php");
// include("url.php");
?>
<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
// error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
// error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
// ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
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
							<h3 class="card-title">Commerical</h3>
						</div>
						<form method="post" action="" id="admin_commercial" enctype="multipart/form-data">
							<div>
								<div class="card-body">
									<div class="form-group">
										<label for="exampleInputEmail1">Type</label>
										<select class="form-control"  placeholder="Enter Type Name" name="type">
											<option value="Office">Office</option>
											<option value="Shop">Shop & Showroom</option>
										</select>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Rent</label>
										<input type="number" class="form-control"  placeholder="Enter Rent" name="rent">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail2">Location</label>
										<select class="form-control" id="exampleInputEmail2" placeholder="Enter Location" name="location">
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
										<textarea class="form-control"  placeholder="Enter Description" name="address"></textarea>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Area in SQFT</label>
										<input type="number" class="form-control"  placeholder="Enter SQFT" name="area">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Cabins</label>
										<select class="form-control"  placeholder="Enter Cabins" name="cabins">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">More than 5</option>
										</select>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Washrooms</label>
										<select class="form-control"  placeholder="Enter Washroom" name="washrooms">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Workstation</label>
										<input type="text" class="form-control"  placeholder="Enter Workstation" name="workstation">
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
										<label for="exampleInputEmail1">Carpet Area in SQFT</label>
										<input type="number" class="form-control"  placeholder="Enter Carpet Area" name="carpetarea">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Furnishing</label>
										<select class="form-control"  name="furnishing">

											<option value="Unfurnished">Unfurnished</option>
											<option value="Semi Furnished">Semi Furnished</option>
											<option value="Full Furnished">Full Furnished</option>
										</select>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Available From</label>
										<input type="date" class="form-control"  placeholder="Enter Available From" name="availablefrom">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Lock in Period</label>
										<input type="number" class="form-control"  placeholder="Enter Lock in Period" name="lockinperiod">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Property Age</label>
										<select class="form-control"  name="propertyage">

											<option value="0 - 1 Years">0 - 1 Years</option>
											<option value="1 - 5 Years">1 - 5 Years</option>
											<option value="5 - 10 Years">5 - 10 Years</option>
											<option value="10 - 20 Years">10 - 20 Years</option>
											<option value="20 + Years">20 + Years</option>
										</select>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Space Type</label>
										<select class="form-control"  name="spacetype">
											<option value="Shop">Shop</option>
											<option value="Office">Office</option>
										</select>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Floor</label>
										<input type="number" class="form-control"  placeholder="Enter Floor" name="floor">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Security Deposit</label>
										<input type="text" class="form-control"  placeholder="Enter Security Deposit" name="deposit">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Description</label>
										<textarea class="form-control"  placeholder="Enter Description" name="description"></textarea>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Services</label><br>
										<input type="checkbox" name="check[]" value="Air Condition (AC)" id="Air Condition1 (AC)">
										<label for="Air Condition1 (AC)">Air Condition (AC)</label>

										<input id="Fan1" type="checkbox" name="check[]" value="Fan">
										<label for="Fan1">Fan</label>

										<input id="Light1" type="checkbox" name="check[]" value="Light">
										<label for="Light1">Light</label>

										<input id="Alloted Parking1" type="checkbox" name="check[]" value="Alloted Parking">
										<label for="Alloted Parking1">Alloted Parking</label>

										<input id="Common Parking1" type="checkbox" name="check[]" value="Comman Parking">
										<label for="Common Parking1">Common Parking</label>

										<input id="Cleaning Service1" type="checkbox" name="check[]" value="Cleaning Service">
										<label for="Cleaning Service1">Cleaning Service</label>

										<input id="Elevator1" type="checkbox" name="check[]" value="Elevator">
										<label for="Elevator1">Elevator</label>
									</div>
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
							</div>
						</form>
					</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- </div>
</section> -->
<div class="content-wrapper">
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Commerical Properties</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body" style="overflow-x:auto;width:100%">
							<table id="example2" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Id</th>
										<th>Type</th>
										<th>Location</th>
										<th>Address</th>
										<th>Space Type</th>
										<th>Cabins</th>
										<th>Workstation</th>
										<th>Washrooms</th>
										<th>Area</th>
										<th>Carpet Area</th>
										<th>Rent</th>
										<th>Available From</th>
										<th>Lock in Period</th>
										<th>Description</th>
										<th>Property Age</th>
										<th>Floor</th>
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
									$query = "SELECT * FROM commerical as c LEFT JOIN commerical_details as cp ON c.id=cp.property_id where c.verify=1 ORDER BY c.id DESC";
									$execute = mysqli_query($con, $query);
									$i = 1;
									while ($fetch = mysqli_fetch_array($execute)) {
										if($fetch['location']){
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
												<?php echo $fetch['type']; ?>
											</td>

											<td>
												<?php echo $location_name['name'] ? $location_name['name'] : 'NA'; ?>
											</td>
											<td>
												<?php echo $fetch['address']; ?>
											</td>
											<td>
												<?php echo $fetch['space_type']; ?>
											</td>
											<td>
												<?php echo $fetch['cabins'] != 6 ? $fetch['cabins'] : 'More than 5' ; ?>
											</td>
											<td>
												<?php echo $fetch['workstation']; ?>
											</td>
											<td>
												<?php echo $fetch['washroom']; ?>
											</td>
											<td>
												<?php echo $fetch['sqft']; ?>
											</td>

											<td>
												<?php echo $fetch['carpet_area']; ?>
											</td>
											<td>
												<?php echo $fetch['rent']; ?>
											</td>
											<td>
												<?php echo $fetch['available_from']; ?>
											</td>
											<td>
												<?php echo $fetch['lock_in_period']; ?>
											</td>
											<td>
												<?php echo substr($fetch['description'], 0, 20) . "..."; ?>
											</td>
											<td>
												<?php echo $fetch['property_age']; ?>
											</td>

											<td>
												<?php echo $fetch['floor']; ?>
											</td>
											<td>
												<?php echo $fetch['features']; ?>
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

											<td><a href="delete_commerical.php?id=<?php echo $fetch['property_id']; ?>" class="btn btn-danger">Delete</a>&nbsp;&nbsp;<a href="update_commerical.php?id=<?php echo $fetch['id']; ?>" class="btn btn-success">Edit</a></td>
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
	// exit;
	$type = $_POST['type'];
	$rent = $_POST['rent'];
	$location = $_POST['location'];
	$address = $_POST['address'];
	$Area = $_POST['area'];
	$cabins = $_POST['cabins'];
	$washroom = $_POST['washrooms'];
	$workstation = $_POST['workstation'];
	$Carpet_Area = $_POST['carpetarea'];
	$furnishing = $_POST['furnishing'];
	$available_from = $_POST['availablefrom'];
	$lockinperiod = $_POST['lockinperiod'];
	$building_age = $_POST['propertyage'];
	$space_type = $_POST['spacetype'];
	$floor = $_POST['floor'];
	$security_deposit = $_POST['deposit'];
	$description = $_POST['description'];
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
	$targetDir = "http://localhost/real-estate/images/commerical";
	$allowTypes = array('jpg', 'png', 'jpeg', 'gif');
	$errorUpload = '';
	$errorUploadType = '';
	$fileNames = array_filter($_FILES['files']['name']);
	if (!empty($fileNames)) {
		foreach ($_FILES['files']['name'] as $key => $val) {
			$fileName = basename($_FILES['files']['name'][$key]);
			$targetFilePath = $targetDir . $fileName;
			$fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION)); // Convert to lowercase for case-insensitive comparison
			// if (in_array($fileType, $allowTypes)) {
				if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
					$images_get[] = $fileName;
				// } else {
				// 	echo('$fileName$fileName$fileName$fileName$fileName');exit;
				// 	$errorUpload .= $_FILES['files']['name'][$key] . ' | '; // Log upload error
				}
			// } else {
			// 	$errorUploadType .= $_FILES['files']['name'][$key] . ' | '; // Log invalid file type error
			// }
		}
	}
	
	$query = "INSERT INTO `commerical`(`type`, `rent`, `location`, `address`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `sqft`, `cabins`, `workstation`, `washroom`,`verify`, `security_deposit`) VALUES ('$type','$rent','$location', '$address','$fileNames[0]','$fileNames[1]','$fileNames[2]','$fileNames[3]','$fileNames[4]','$fileNames[5]','$Area','$cabins','$workstation','$washroom',1, '$security_deposit')";
	$execute1 = mysqli_query($con, $query);

	$query1 = "select id from commerical order by id desc limit 1";
	$execute3 = mysqli_query($con, $query1);
	$fetch1 = mysqli_fetch_array($execute3);
	$propertyid = $fetch1['id'];

	$query2 = "INSERT INTO `commerical_details`(`property_id`, `carpet_area`, `furnishing`, `available_from`, `lock_in_period`, `description`, `property_age`, `floor`, `features`, `space_type`) VALUES ('$propertyid','$Carpet_Area','$furnishing','$available_from','$lockinperiod','$description','$building_age','$floor','$check1','$space_type')";
	$execute2 = mysqli_query($con, $query2);
	if ($execute1 and $execute2) {
		echo "<script>alert('success')</script>";
	}
}

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
	$(document).ready(function() {
		$("#admin_commercial").validate({
			rules: {
				type: "required",
				space_type: "required",
				area: {
					required: true,
					digits: true
				},
				carpetarea: {
					required: true,
					digits: true
				}, 
				rent: "required",
				deposit: "required",
				availablefrom: "required",
				lockinperiod: "required",
				address: "required",
				description: "required",
				propertyage: "required",
				furnishing: "required",
				cabins: "required",
				washrooms: "required",
				workstation: "required",
				floor: "required",
				"check[]": "required",
				"files[]": {
					required: true,
				}
			},
			messages: {
				type: "Please select type",
				space_type: "Please select space type",
				area: {
					required: "Please enter area",
					digits: "Please enter only digits",
				},
				carpetarea: {
					required: "Please enter carpet area",
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
				cabins: "Please select cabin",
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
</script>
<script>
	// $.noConflict();
	$(document).ready(function($) {
		$('#example2').DataTable();
	});
</script>