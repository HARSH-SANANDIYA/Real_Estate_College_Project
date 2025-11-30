<?php
include("header.php");
$url = "http://localhost/real-estate/images/commerical";
?>
<div class="content-wrapper">

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
									<th>User_id</th>
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
								$query = "SELECT * FROM properties c,properties_details cp,login L where c.id=cp.property_id  and l.id=c.user_id and c.verify=0 ORDER BY c.id DESC";
								$execute = mysqli_query($con, $query);

								$i = 1;
								while ($fetch = mysqli_fetch_array($execute)) {
									
								?>
								
									<tr>
										<td>
											<?php echo $i; ?>
										</td>
										<td>
											<?php echo $fetch['user_id']; ?>
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
											<button class="btn btn-danger see-more" data-description="<?php echo $fetch['description']; ?>">See More</button>
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

										<td><a href="delete_userresidential.php?id=<?php echo $fetch['property_id']; ?>" class="btn btn-danger">Delete</a>
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
	<?php include("footer.php"); ?>
	<!-- Modal -->
	<div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="descriptionModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="descriptionModalLabel">Description</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p id="descriptionText"></p>
				</div>
			</div>
		</div>
	</div>
<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$property_type = $_POST['property_type'];
		$bed = $_POST['bed'];
		$bath = $_POST['bath'];
		$balconies = $_POST['balconies'];
		$sqrt = $_POST['sqrt'];    
		$bhk = $_POST['bhk'];
		$rent = $_POST['rent'];
		$available_from = $_POST['available_from'];
		$description = $_POST['description'];
		$property_age = $_POST['property_age'];
		$tenant_type = $_POST['tenant_type'];
		$property_feature = $_POST['property_feature'];
		$furnishing = $_POST['furnishing'];
		$image = $_POST['files'];
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
		$query = "INSERT INTO `properties`(`name`,`address`,`bed`,`bath`,`sqrt`,`bhk`,`rent`,`description`,`furnishing`,`image1`,`image2`,`image3`,`image4`,`image5`, `image6`)  VALUES ('$name','$address','$bed','$bath','$sqrt','$bhk','$rent','$description','$furnishing','$image[0]','$image[1]','$image[2]','$image[3]','$image[4]','$image[5]')";
		$execute1 = mysqli_query($con, $query);
		$query1 = "select id from properties order by id desc limit 1";
		$execute3 = mysqli_query($con, $query1);
		$fetch1 = mysqli_fetch_array($execute3);
		$propertyid = $fetch1['id'];
		$query2 = "INSERT INTO `properties_details`(`property_id`,`property_type`,`balconies`,`available_from`,`property_age`,`tenant_type`,`property_feature`) VALUES ('$propertyid','$property_type','$balconies','$available_from','$property_age','$tenant_type','$property_feature')";
	 	$execute2 = mysqli_query($con, $query2);
	 	if ($execute1 and $execute2) {
	 		echo "<script>alert('success')</script>";
	 	}
	}

?>
	<script>
		$(document).ready(function() {
			$('.see-more').click(function() {
				var description = $(this).data('description');
				$('#descriptionText').text(description);
				$('#descriptionModal').modal('show');
			});
		});
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js">

	</script>



	<script>
		$.noConflict();
		jQuery(document).ready(function($) {
			$('#example2').DataTable();
		});
	</script>