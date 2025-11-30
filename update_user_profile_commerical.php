<?php 
include("profile.php");
include("connection.php");
$id=$_GET['id'];
$query="SELECT * FROM commerical c,commerical_details cp where c.id=cp.property_id and c.id='$id'";
$execute=mysqli_query($con,$query);
$fetch=mysqli_fetch_array($execute);
echo $fetch['rent'];
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
                <h3 class="card-title">Commerical</h3>
              </div>
              <form method="post" action="" enctype="multipart/form-data">
							<div class="card-body">
                                <div class="form-group">
									<label for="exampleInputEmail1">clients_name</label>
									<input type="number" class="form-control" id="exampleInputEmail1"
										placeholder="Enter clients_name" name="clients_name" value="<?php echo $fetch['clients_name']?>">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Type</label>
									<select class="form-control"  placeholder="Enter Type Name" name="type">
                  						<option value="Office" >Office</option>
										<option value="Shop & Showroom">Shop & Showroom</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Rent</label>
									<input type="number" class="form-control" id="exampleInputEmail1"
										placeholder="Enter Rent" name="rent" value="<?php echo $fetch['rent']?>">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Location</label>
									<input type="text" class="form-control" id="exampleInputEmail1"
										placeholder="Enter Location" name="location" value="<?php echo $fetch['location']?>">
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Area in SQFT</label>
									<input type="number" class="form-control" id="exampleInputEmail1"
										placeholder="Enter SQFT" name="area" value="<?php echo $fetch['sqft']?>">
								</div>	

								<div class="form-group">
									<label for="exampleInputEmail1">Cabins</label>
									<select class="form-control"  placeholder="Enter Cabins" name="cabins">
										<option value="0" <?php if ($fetch['cabins'] == '0') echo 'selected'; ?>>0</option>
										<option value="1" <?php if ($fetch['cabins'] == '1') echo 'selected'; ?>>1</option>
										<option value="2" <?php if ($fetch['cabins'] == '2') echo 'selected'; ?>>2</option>
										<option value="3" <?php if ($fetch['cabins'] == '3') echo 'selected'; ?>>3</option>
										<option value="4" <?php if ($fetch['cabins'] == '4') echo 'selected'; ?>>4</option>
										<option value="5" <?php if ($fetch['cabins'] == '5') echo 'selected'; ?>>5</option>
										<option value="6" <?php if ($fetch['cabins'] == 'More than 5') echo 'selected'; ?>>More than 5</option>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Washrooms</label>
									<select class="form-control"  placeholder="Enter Washroom" name="washrooms">
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Workstation</label>
									<input type="text" class="form-control" id="exampleInputEmail1"
										placeholder="Enter Workstation" name="workstation" value="<?php echo $fetch['workstation']?>">
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Latitude</label>
									<input type="text" class="form-control" id="exampleInputEmail1"
										placeholder="Enter Latitude" name="latitude" value="<?php echo $fetch['latitude']?>">
								</div>

								
								<div class="form-group">
									<label for="exampleInputEmail1">Longitude</label>
									<input type="text" class="form-control" id="exampleInputEmail1"
										placeholder="Enter Longitude" name="longitude" value="<?php echo $fetch['longitude']?>">
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Carpet Area in SQFT</label>
									<input type="number" class="form-control" id="exampleInputEmail1"
										placeholder="Enter Carpet Area" name="carpetarea" value="<?php echo $fetch['carpet_area']?>">
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Furnishing</label>
									<select class="form-control"  name="furnishing">
										<option value="Unfurnished" <?php if ($fetch['furnishing'] == 'Unfurnished') echo 'selected'; ?>>Unfurnished</option>
										<option value="Semi Furnished" <?php if ($fetch['furnishing'] == 'Semi Furnished') echo 'selected'; ?>>Semi Furnished</option>
										<option value="Full Furnished" <?php if ($fetch['furnishing'] == 'Full Furnished') echo 'selected'; ?>>Full Furnished</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Available From</label>
									<input type="text" class="form-control" id="exampleInputEmail1"
										placeholder="Enter Available From" name="availablefrom" value="<?php echo $fetch['available_from']?>">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Lock in Period</label>
									<input type="text" class="form-control" id="exampleInputEmail1"
										placeholder="Enter Lock in Period" name="lockinperiod" value="<?php echo $fetch['lock_in_period']?>">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Property Age</label>
									<select class="form-control"  name="propertyage">
										<option value="0 - 1 Years">0 - 1 Years</option>
										<option value="1 - 5 Years">1 - 5 Years</option>
										<option value="5 - 10 Years">5 - 10 Years</option>
										<option value="10 - 20 Years">10 - 20 Years</option>
										<option value="20 + ">20 + Years</option>
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
									<label for="exampleInputEmail1">Security Deposit</label>
									<input type="number" class="form-control" id="exampleInputEmail1"
										placeholder="Enter Security Deposit" name="deposit" value="<?php echo $fetch['security_deposit']?>">
								</div>
                                <div class="form-group">
									<label for="exampleInputEmail1">Floor</label>
									<input type="text" class="form-control" id="exampleInputEmail1"
										placeholder="Enter Floor" name="floor" value="<?php echo $fetch['floor']?>">
								</div>

                                <div class="form-group">
									<label for="exampleInputEmail1">Description</label>
									<textarea  class="form-control" id="exampleInputEmail1"
										placeholder="Enter Description" name="description"><?php echo $fetch['description']?>"</textarea>
								</div>

                                <div class="form-group">
									<label for="exampleInputEmail1">Services</label><br>
									<input type="checkbox" name="check[]" value="Air Condition (AC)"
									id="Air Condition1 (AC)">
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
</div>
 
 <?php
  if(isset($_POST['submit']))
  {
      $type=$_POST['type'];
      $rent=$_POST['rent'];
      $location=$_POST['location'];
      $area=$_POST['area'];
      $cabins=$_POST['cabins'];
      $washrooms=$_POST['washrooms'];
	  $workstation=$_POST['workstation'];
	  $latitude=$_POST['latitude'];
	  $longitude=$_POST['longitude'];
      $carpetarea=$_POST['carpetarea'];
      $furnishing=$_POST['furnishing'];
      $lockinperiod=$_POST['lockinperiod'];
      $availablefrom=$_POST['availablefrom'];
      $propertyage=$_POST['propertyage'];
      $spacetype=$_POST['spacetype'];
      $floor=$_POST['floor'];
	  $deposit=$_POST['deposit'];
      $description=$_POST['description'];
      $check1='';
      if(!empty($_POST['check'])) {
        foreach($_POST['check'] as $check) {
          if($check1=='')
          {
            $check1=$check;
          }
          else
          {
            $check1=$check1.','.$check;
          }	
        }
      }
    

    $sql="UPDATE `commerical_details` SET `carpet_area`='$carpetarea',`furnishing`='$furnishing',`available_from`='$availablefrom',`lock_in_period`='$lockinperiod',`description`='$description',`property_age`='$propertyage',`floor`='$floor',`features`='$check1SS',`video`='$video',`space_type`='$spacetype',`latitude`='$latitude',`longitude`='$longitude' WHERE `property_id`='$id'";
    $execute=mysqli_query($con,$sql);
    $sql1="UPDATE `commerical` SET `type`='$type',`rent`='$rent',`location`='$location',`sqft`='$area',`cabins`='$cabins',`workstation`='$workstation',`washroom`='$washrooms',`security_deposit`='$deposit' WHERE `id`='$id'";
    $execute1=mysqli_query($con,$sql1);
    echo $sql;
    echo $sql1;
    if($execute and $execute1)
    {
        echo "<script>window.location.href='commerical.php'</script>";
    }
  }
 ?>