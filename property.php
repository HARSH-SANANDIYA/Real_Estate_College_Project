<?php
include("header.php");
?>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Titlebar -->
<div class="parallax titlebar" data-background="images/popular-location-04.jpg" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
	<div id="titlebar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Residential Property</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Residential Property</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Content -->
<div class="container">
	<div class="row sticky-wrapper">
		<!-- Sidebar -->
		<div class="col-md-4">
			<div class="sidebar">
				<!-- <form method='POST'> -->
					<!-- Widget -->
					<!-- <div class="widget utf-sidebar-widget-item">
						<div class="utf-boxed-list-headline-item">
							<h3>Find New Home</h3>
						</div>
						<div class="row with-forms">
							<div class="col-md-12">
								<select data-placeholder="Property Type" class="utf-chosen-select-single-item" name="property_type">
									<option value=""></option>
									<option value="Office">Office</option>
									<option value="Shop">Shop</option>
								</select>
							</div>
						</div> -->
						<!-- Row / End -->

						<!-- Row -->
						<!-- <div class="row with-forms">
							<div class="col-md-12">
								<select data-placeholder="Location" class="chosen-select" name="area[]" multiple>

									<option disabled>Select Area</option>
									<?php
									$query = 'SELECT *  from `location`';
									$execute = mysqli_query($con, $query);
									while ($fetch = mysqli_fetch_array($execute)) {
									?>
										<option value="<?php echo $fetch['id'] ?>">
											<?php echo $fetch['name'] ?>
										</option>
									<?php
									}
									?>
								</select>
							</div>
						</div> -->
						<!-- Row / End -->

						<!-- Price Range -->
						<!-- <div class="row with-forms">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="number" placeholder="Start Range" name="startrange">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="number" placeholder="End Range" name="endrange">
							</div>
						</div> -->


						<!-- More Search Options -->
						<!-- <div class="utf-more-search-options-area relative">
							<div class="checkboxes one-in-row margin-bottom-10">

							</div> -->
							<!-- Checkboxes / End -->
						<!-- </div>
						<div class="sort-by">
							<label>Sort By:</label> -->
							<!-- <form method="POST"> -->
								<!-- <div class="sort-by-select">
									<select data-placeholder="Default Properties" class="utf-chosen-select-single-item" name="sort">
										<option>Default Properties</option>
										<option value="LH">Low to High Price</option>
										<option value="HL">High to Low Price</option>
									</select> -->
									<!-- <input type="submit" class="button fullwidth margin-top-10" value="sort" name="sortbutton"> -->
								<!-- </div> -->
							<!-- </form> -->
						<!-- </div> -->
						<!-- More Search Options / End -->
						<!-- <input type="submit" class="button fullwidth margin-top-10" value="Search" name="search">
					</div>
				</form> -->
				<!-- Widget / End -->

				<?php
				include("connection.php");
				$query = 'SELECT * FROM adbanner';
				$execute = mysqli_query($con, $query);
				$fetch = mysqli_fetch_array($execute)
				?>
				<!-- Widget -->
				<div class="widget utf-sidebar-widget-item">
					<div class="utf-detail-banner-add-section">
						<a href="<?php echo $fetch['link'] ?>"><img src="<?php echo $fetch['image'] ?>" alt="banner-add-2"></a>
					</div>
				</div>
				<!-- Widget / End-->


				<!-- Widget -->
				<div class="widget utf-sidebar-widget-item">
					<div class="utf-boxed-list-headline-item">
						<h3>Social Sharing</h3>
					</div>
					<ul class="utf-social-icons rounded">
						<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
						<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
						<li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<!-- Widget / End-->
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- Sidebar / End -->

		<div class="col-md-8">
			<!-- Sorting -->
			<div class="utf-sort-box-aera">
				 <div class="sort-by">
					<label>Sort By:</label>
					<form method="POST">
						<div class="sort-by-select">
							<select data-placeholder="Default Properties" class="utf-chosen-select-single-item" name="sort">
								<option>Default Properties</option>
								<option value="LH">Low to High Price</option>
								<option value="HL">High to Low Price</option>
							</select>
							<input type="submit" class="button fullwidth margin-top-10" value="sort" name="sortbutton">
						</div>
					</form>
				</div> 
				<div class="utf-layout-switcher">
					<a href="#" class="list"><i class="sl sl-icon-list"></i></a>
					<a href="#" class="grid"><i class="sl sl-icon-grid"></i></a>
				</div>
			</div>

			<!-- Listings -->
			<div class="utf-listings-container-area list-layout">
				<?php
				if (isset($_GET['location'])) {
					$location = $_GET['location'];
					$aa = rtrim($location, ",");
					$query = "SELECT * FROM properties p, properties_details pd where p.id=pd.property_id and verify=1  and location in ($aa)";
				} else if (isset($_POST['search'])) {

					$property_type = $_POST['property_type'];
					$bhks = $_POST['bhk'];
					if ($bhks) {
						$bhk = implode(',', $bhks);
					}
					$tenant = $_POST['tenant'];
					$type = $_POST['type'];
					$area = $_POST['area'];
					if ($area) {
						$aa = implode(',', $area);
					}
					$startrange = $_POST['startrange'];
					$endrange = $_POST['endrange'];
					if ($property_type || $bhks || $tenant || $type || $area || ($startrange && $endrange)) {
						$query = "SELECT * FROM properties as p LEFT JOIN properties_details as pd ON p.id=pd.property_id WHERE ";
					} else {
						$query = "SELECT * FROM properties as p LEFT JOIN properties_details as pd ON p.id=pd.property_id WHERE p.verify=1 ORDER BY p.id DESC LIMIT 10";
					}
					if ($property_type) {
						$query .= "furnishing LIKE '%$property_type%' ";
					}
					if ($bhk) {
						if ($property_type) {
							$query .= "and ";
						}
						$query .= "bhk in ($bhk) ";
					}
					if ($aa) {
						if ($bhk || $property_type) {
							$query .= "and ";
						}
						$query .= "location in ($aa) ";
					}
					if ($tenant) {
						if ($bhk || $property_type || $aa) {
							$query .= "and ";
						}
						$query .= "tenant_type LIKE '%$tenant%' ";
					}
					if ($type) {
						if ($bhk || $property_type || $aa || $tenant) {
							$query .= "and ";
						}
						$query .= "property_type LIKE '%$type%' ";
					}
					if ($startrange && $endrange) {
						if ($bhk || $property_type || $aa || $tenant || $type) {
							$query .= "and ";
						}
						$query .= "(rent between $startrange and $endrange)";
					}
					$sort = $_POST['sort'];
					if ($sort) {
						if ($sort == 'LH') {
							$query .= "order by rent ASC ";
						} else {
							$query .= "order by rent DESC";
						}
					}
					// $query = "Select * from properties p, properties_details pd where  p.id = pd.property_id and furnishing='$property_type' and bhk='$bhk' and location in ($aa) and tenant_type='$tenant' and property_type='$type' and rent between $startrange and $endrange";
					// $execute = mysqli_query($con, $query);
				} else if (isset($_POST['sortbutton'])) {
					$sort = $_POST['sort'];
					$query = 'SELECT * FROM properties as p LEFT JOIN properties_details as pd ON p.id=pd.property_id WHERE verify=1 ';
					if ($sort == 'LH') {
						$query .= "order by rent ASC";
					} else {
						$query .= "order by rent DESC";
					}
				} else {
					$query = "SELECT * FROM properties as p LEFT JOIN properties_details as pd ON p.id=pd.property_id WHERE p.verify=1 ORDER BY p.id DESC LIMIT 10";
					// echo $query;exit;
					// $query = 'SELECT * FROM properties p, properties_details pd where p.id=pd.property_id and p.verify=1';
				}
				// echo $query;exit;
				$execute = mysqli_query($con, $query);
				if ($execute->num_rows > 0) {
					while ($fetch = mysqli_fetch_array($execute)) {
						if ($fetch['location']) {
							$location_id = $fetch['location'];
							$location_get = "SELECT * FROM `location` WHERE id=$location_id";
							$location_query = mysqli_query($con, $location_get);
							$location_name = mysqli_fetch_array($location_query);
						}
				?>
						<!-- Listings -->
						<div class="utf-listing-item"> <a href="property-detail.php?id=<?php echo $fetch['id'] ?>" class="utf-smt-listing-img-container">
								<div class="utf-listing-badges-item"></div>

								<div class="utf-listing-carousel-item">
									<div><img src="http://localhost/real-estate/images/commerical/<?php echo $fetch['image1'] ?>" alt=""></div>
									<div><img src="http://localhost/real-estate/images/commerical/<?php echo $fetch['image2'] ?>" alt=""></div>
									<div><img src="http://localhost/real-estate/images/commerical/<?php echo $fetch['image3'] ?>" alt=""></div>
								</div>
							</a>
							<div class="utf-listing-content">
								<div class="utf-listing-title">
									<span class="utf-listing-price">Rs.
										<?php echo $fetch['rent'] ?>
									</span>
									<h4><a href="property-detail.php?id=<?php echo $fetch['id'] ?>">
											<?php echo $fetch['property_type'] ?>
										</a></h4>
									<span class="utf-listing-address"><i class="icon-material-outline-location-on"></i>
										<?php echo $location_name['name']; ?>
									</span>
								</div>
								<ul class="utf-listing-features">
									<li><i class="fa fa-bed"></i> Beds<span>
											<?php echo $fetch['bed'] ?>
										</span></li>
									<li><i class="icon-feather-codepen"></i> Baths<span>
											<?php echo $fetch['bath'] ?>
										</span></li>
									<li><i class="fa-solid fa-house-chimney"></i> BHK<span>
											<?php echo $fetch['bhk'] ?>
										</span></li>
									<li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>
											<?php echo $fetch['sqrt'] ?>
										</span></li>
								</ul>
							</div>
						</div>
						<!-- Listing Item / End -->
					<?php
					}
				} else {
					?><h1>No Data Found</h1><br>
					<hr><br>
					<?php
					$query = "SELECT * FROM properties as p LEFT JOIN properties_details as pd ON p.id=pd.property_id WHERE p.verify=1 ORDER BY p.id DESC LIMIT 10";
					$execute = mysqli_query($con, $query);
					while ($fetch = mysqli_fetch_array($execute)) {
						if ($fetch['location']) {
							$location_id = $fetch['location'];
							$location_get = "SELECT * FROM `location` WHERE id=$location_id";
							$location_query = mysqli_query($con, $location_get);
							$location_name = mysqli_fetch_array($location_query);
						}
					?>
						<!-- Listings -->
						<div class="utf-listing-item"> <a href="property-detail.php?id=<?php echo $fetch['id'] ?>" class="utf-smt-listing-img-container">
								<div class="utf-listing-badges-item"></div>

								<div class="utf-listing-carousel-item">
									<div><img src="http://localhost/real-estate/images/commerical/<?php echo $fetch['image1'] ?>" alt=""></div>
									<div><img src="http://localhost/real-estate/images/commerical/<?php echo $fetch['image2'] ?>" alt=""></div>
									<div><img src="http://localhost/real-estate/images/commerical/<?php echo $fetch['image3'] ?>" alt=""></div>
								</div>
							</a>
							<div class="utf-listing-content">
								<div class="utf-listing-title">
									<span class="utf-listing-price">Rs.
										<?php echo $fetch['rent'] ?>
									</span>
									<h4><a href="property-detail.php?id=<?php echo $fetch['id'] ?>">
											<?php echo $fetch['property_type'] ?>
										</a></h4>
									<span class="utf-listing-address"><i class="icon-material-outline-location-on"></i>
										<?php echo $location_name['name']; ?>
									</span>
								</div>
								<ul class="utf-listing-features">
									<li><i class="fa fa-bed"></i> Beds<span>
											<?php echo $fetch['bed'] ?>
										</span></li>
									<li><i class="icon-feather-codepen"></i> Baths<span>
											<?php echo $fetch['bath'] ?>
										</span></li>
									<li><i class="fa-solid fa-house-chimney"></i> BHK<span>
											<?php echo $fetch['bhk'] ?>
										</span></li>
									<li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>
											<?php echo $fetch['sqrt'] ?>
										</span></li>
								</ul>
							</div>
						</div>
						<!-- Listing Item / End -->
				<?php
					}
				}
				?>
				<!-- Listing Item / End -->



			</div>
			<!-- Listings Container / End -->
		</div>


	</div>
</div>
<?php include("footer.php"); ?>