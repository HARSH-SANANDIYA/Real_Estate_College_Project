<?php include("header.php");
$id = $_GET['id'];
$query = "SELECT * FROM properties c LEFT JOIN properties_details cp on c.id=cp.id where c.id=cp.property_id and c.id='$id'";
// echo $query;exit;
$execute = mysqli_query($con, $query);
while ($fetch = mysqli_fetch_array($execute)) {
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
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="card card-primary">
							<div class="card-header">
								<h3 class="card-title">Residential</h3>
							</div>
							<form method="post" action="" enctype="multipart/form-data">
								<div class="card-body">
									<div class="form-group">
										<label for="exampleInputEmail1">Name</label>
										<input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $fetch[4] ?>">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Rent</label>
										<input type="number" class="form-control" id="exampleInputEmail1" name="rent" value="<?php echo $fetch['rent'] ?>">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Location</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Location" name="location" value="<?php echo $fetch['location'] ?>">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Latitude</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Latitude" name="latitude" value="<?php echo $fetch['map'] ?>">
									</div>

									<div class="form-group">
										<label for="exampleInputEmail1">Longitude</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Longitude" name="longitude" value="<?php echo $fetch['longitude'] ?>">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Area in SQFT</label>
										<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter SQFT" name="sqrt" value="<?php echo $fetch['sqrt'] ?>">
									</div>

									<div class="form-group">
										<label for="exampleInputEmail1">Bed</label>
										<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Bedroom" name="bed" value="<?php echo $fetch['bed'] ?>">
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
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Available From" name="availablefrom" value="<?php echo $fetch['available_from'] ?>">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Property age</label>
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
										<label for="exampleInputEmail1">Security Deposit</label>
										<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Security Deposit" name="deposit" value="<?php echo $fetch['security_deposit'] ?>">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Description</label>
										<textarea class="form-control" id="exampleInputEmail1" placeholder="Enter Description" name="description"><?php echo $fetch['description'] ?></textarea>
									</div>
									<input id="Air Condition (AC)" type="checkbox" name="check[]" value="Air Condition (AC)">
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
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary" name="submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>
	</section>
	</div>
<?php } ?>
<?php include("footer.php"); ?>
<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$rent = $_POST['rent'];
	$location = $_POST['location'];
	$furnishing = $_POST['furnishing'];
	$sqrt = $_POST['sqrt'];
	$bed = $_POST['bed'];
	$bath = $_POST['bath'];
	$bhk = $_POST['bhk'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$tenant_type = $_POST['tenant'];
	$balconies = $_POST['balconies'];
	$furnishing = $_POST['furnishing'];
	$availablefrom = $_POST['availablefrom'];
	$propertyage = $_POST['propertyage'];
	$propertytype = $_POST['propertytype'];
	$description = $_POST['description'];
	$deposit = $_POST['deposit'];
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

	$sql = "UPDATE `properties` SET `name`='$name',`rent`='$rent',`location`='$location',`furnishing`='$furnishing',`bed`='$bed',`bath`='$bath',`bhk`='$bhk',`sqrt`='$sqrt',`description`='$description',`security_deposit`='$deposit'  WHERE `id`='$id'";
	$execute = mysqli_query($con, $sql);
	$sql1 = "UPDATE `properties_details` SET `balconies`='$balconies',`tenant_type`='$tenant_type',`available_from`='$availablefrom',`property_age`='$propertyage',`property_type`='$propertytype',`property_feature`='$check1', `map`='$latitude',`longitude`='$longitude' WHERE `property_id`='$id'";
	$execute1 = mysqli_query($con, $sql1);

	if ($execute and $execute1) {
		echo "<script>window.location.href='residential.php'</script>";
	}
}
?>