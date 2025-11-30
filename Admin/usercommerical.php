<?php
include("header.php");
$url = "http://localhost/real-estate/images/commerical";
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
						<h3 class="card-title">Commerical Properties</h3>
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
								$query = "SELECT * FROM commerical c,commerical_details cp,login l where c.id=cp.property_id and l.id=c.user_id and c.verify=0 ORDER BY c.id DESC";
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
											<button class="btn btn-danger see-more" data-description="<?php echo $fetch['description']; ?>">See More</button>
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

										<td><a href="delete_usercommerical.php?id=<?php echo $fetch['property_id']; ?>" class="btn btn-danger">Delete</a>&nbsp;&nbsp;</td>
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
		$type = $_POST['type'];
		$rent = $_POST['rent'];
		$location = $_POST['location'];
		$area = $_POST['area'];
		$seats = $_POST['seats'];
		$cabins = $_POST['cabins'];
		$washrooms = $_POST['washrooms'];
		$carpetarea = $_POST['carpetarea'];
		$furnishing = $_POST['furnishing'];
		$lockinperiod = $_POST['lockinperiod'];
		$availablefrom = $_POST['availablefrom'];
		$propertyage = $_POST['propertyage'];
		$spacetype = $_POST['spacetype'];
		$vastu = $_POST['vastu'];
		$floor = $_POST['floor'];
		$description = $_POST['description'];
		$image = $_POST['files'];
		$video = $_POST['video'];
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
		$query = "INSERT INTO `commerical`(`type`, `rent`, `location`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `sqft`, `cabins`, `seat`, `washroom`) VALUES ('$type','$rent','$location','$image[0]','$image[1]','$image[2]','$image[3]','$image[4]','$image[5]','$area','$cabins','$seats','$washrooms')";
		$execute1 = mysqli_query($con, $query);
		$query1 = "select id from commerical order by id desc limit 1";
		$execute3 = mysqli_query($con, $query1);
		$fetch1 = mysqli_fetch_array($execute3);
		$propertyid = $fetch1['id'];
		$query2 = "INSERT INTO `commerical_details`(`property_id`, `carpet_area`, `furnishing`, `available_from`, `lock_in_period`, `description`, `property_age`, `floor`, `vastu`,  `features`, `video`, `space_type`) VALUES ($propertyid,'$carpetarea','$furnishing','$availablefrom','$lockinperiod','$description','$propertyage','$floor','$vastu','$check1','$video','$spacetype')";
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
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

	<script>
		$.noConflict();
		jQuery(document).ready(function($) {
			$('#example2').DataTable();
		});
	</script>