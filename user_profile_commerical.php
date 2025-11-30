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
						<h3 class="card-title">Commercial Properties</h3>
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
									<th>Type</th>
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
									$login_id = $fetch['id'];

								//$query = "SELECT * FROM commerical c,commerical_details cp,login l where c.id=cp.property_id and l.id=c.user_id and c.verify=0 and l.id =  ORDER BY c.id DESC";
								$query = "SELECT *
								FROM commerical c
								JOIN commerical_details cp ON c.id = cp.property_id
								JOIN login l ON l.id = c.user_id
								WHERE c.verify = 0
								AND l.id = $login_id
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
											<?php echo $fetch['clients_name']; ?>
										</td>
										<td>
											<?php echo $fetch['clients_email']; ?>
										</td>
										<td>
											<?php echo $fetch['clients_mobile_no']; ?>
										</td>
										<td>
											<?php echo $fetch['type']; ?>
										</td>

										<td>
											<?php echo $fetch['address']; ?>
										</td>
										<td>
											<?php echo $fetch['space_type']; ?>
										</td>
										<td>
											<?php echo $fetch['cabins'] != 6 ? $fetch['cabins'] : 'More than 5'; ?>
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
											<?php echo substr($fetch['description'], 0, 10) . "..."; ?>
											<!-- <button class="btn btn-danger see-more" id="see-more" data-description="<?php echo $fetch['description']; ?>">See More</button> -->
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

										<td><a href="delete_user_profile_commerical.php?id=<?php echo $fetch['property_id']; ?>" class="btn btn-danger">Delete</a></td> 
										<!-- &nbsp;&nbsp;<a href="update_user_profile_commerical.php?id=<?php echo $fetch['id']; ?>" class="btn btn-success">Edit</a> -->
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


	
	
	
	
	
	