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
					<h2>Commerical Property</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Commerical Property</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Main Search Container -->
<!-- <div class="utf-main-search-container-area inner-map-search-block inner-search-item">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="utf-main-search-form-item">
            <div class="utf-main-search-box-area">
              <div class="row with-forms">
                <div class="col-md-2 col-sm-4">
                  <select data-placeholder="Select City" title="Select City" class="utf-chosen-select-single-item">
                    <option>Select City</option>
                    <option>Afghanistan</option>
                    <option>Albania</option>
                    <option>Algeria</option>
                    <option>Brazil</option>
                    <option>Burundi</option>
                    <option>Bulgaria</option>
                    <option>California</option>
                    <option>Germany</option>
                    <option>Grenada</option>
                    <option>Guatemala</option>
                    <option>Iceland</option>
                  </select>
                </div>

                <div class="col-md-2 col-sm-4">
                  <select data-placeholder="Property Type" class="utf-chosen-select-single-item">
                    <option>Property Type</option>
                    <option>Residential</option>
                    <option>Apartments</option>
                    <option>Houses</option>
                    <option>Commercial</option>
                    <option>Land</option>
                  </select>
                </div>

                <div class="col-md-2 col-sm-4">
                  <select data-placeholder="Any Status" class="utf-chosen-select-single-item">
                    <option>Any Status</option>
                    <option>For Sale</option>
                    <option>For Rent</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <div class="utf-main-search-input-item">
                    <input type="text" placeholder="Enter Keywords..." value="" />
                    <button class="button"><i class="fa fa-search"></i> Search</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div> -->
<!-- Main Search Container / End -->

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
				<!-- <div class="sort-by">
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
				</div> -->
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
					$query = "SELECT * FROM commerical c, commerical_details cd where c.id=cd.property_id and verify=1 and location in ($aa)";
				} else if (isset($_POST['search'])) {
					$property_type = $_POST['property_type'];
					$area = $_POST['area'];
					if ($area) {
						$aa = implode(',', $area);
					}
					$startrange = $_POST['startrange'];
					$endrange = $_POST['endrange'];
					if ($property_type || $area || ($startrange && $endrange)) {
						$query = "SELECT * FROM commerical as c LEFT JOIN commerical_details as cd ON c.id=cd.id WHERE c.verify=1 and ";
					} else {
						$query = "SELECT * FROM commerical as c LEFT JOIN commerical_details as cd ON c.id=cd.id WHERE c.verify=1 ORDER BY c.id DESC LIMIT 10 ";
					}
					if ($property_type) {
						$query .= "type LIKE '%$property_type%'";
					}
					if ($area) {
						if ($property_type) {
							$query .= "and ";
						}
						$query .= "location in ($aa) ";
					}
					if ($startrange && $endrange) {
						if ($property_type || $area) {
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
				} else if (isset($_POST['sortbutton'])) {
					$sort = $_POST['sort'];
					$query = 'SELECT * FROM commerical as c LEFT JOIN commerical_details as cd ON c.id=cd.property_id where verify=1 ';
					if ($sort == 'LH') {
						$query .= "order by rent ASC";
					} else {
						$query .= "order by rent DESC";
					}
				} else {
					$query = 'SELECT * FROM commerical as c LEFT JOIN commerical_details as cd ON c.id=cd.property_id where c.verify=1 ORDER BY c.id DESC LIMIT 10';
				}
				$execute = mysqli_query($con, $query);
				if ($execute->num_rows > 0) {
					if ($execute) {
						while ($fetch = mysqli_fetch_array($execute)) {
							if ($fetch['location']) {
								$location_id = $fetch['location'];
								$location_get = "SELECT * FROM `location` WHERE id=$location_id";
								$location_query = mysqli_query($con, $location_get);
								$location_name = mysqli_fetch_array($location_query);
							}
				?>
							<div class="utf-listing-item">
								<a href="Commerical-pr-detail.php?id=<?php echo $fetch['id'] ?>" class="utf-smt-listing-img-container">
									<!-- <div class="utf-listing-badges-item"><span class="featured">Featured</span> <span
								class="for-sale">For
								Sale</span></div> -->

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
										<h4><a href="Commerical-pr-detail.php?id=<?php echo $fetch['id'] ?>">
												<?php echo $fetch['type'] ?>
											</a></h4>
										<span class="utf-listing-address"><i class="icon-material-outline-location-on"></i>
											<?php echo $location_name['name'] ?>
										</span>
										<ul class="utf-listing-features">
											<li><i class="fa-solid fa-location-crosshairs"></i> Sq Ft<span>
													<?php echo $fetch['sqft'] ?>
												</span></li>
											<li><i class="fa-solid fa-building"></i>Cabins <span>
													<?php echo $fetch['cabins'] ?>
												</span></li>
											<li><i class="fa-solid fa-clipboard-user"></i>Carpet <span>
													<?php echo $fetch['carpet_area'] ?>
												</span></li>
											<li><i class="fa-solid fa-bath"></i>Washroom <span>
													<?php echo $fetch['washroom'] ?>
												</span></li>
										</ul>
									</div>
								</div>
							</div>
					<?php
						}
					}
				} else {
					?><h1>No Data Found</h1><br>
					<hr><br>
					<?php
					$query = 'SELECT * FROM commerical as c LEFT JOIN commerical_details as cd ON c.id=cd.property_id where verify=1 ORDER BY c.id DESC LIMIT 10';
					$execute = mysqli_query($con, $query);
					while ($fetch = mysqli_fetch_array($execute)) {
						if ($fetch['location']) {
							$location_id = $fetch['location'];
							$location_get = "SELECT * FROM `location` WHERE id=$location_id";
							$location_query = mysqli_query($con, $location_get);
							$location_name = mysqli_fetch_array($location_query);
						}
					?>
						<div class="utf-listing-item">
							<a href="Commerical-pr-detail.php?id=<?php echo $fetch['id'] ?>" class="utf-smt-listing-img-container">
								<!-- <div class="utf-listing-badges-item"><span class="featured">Featured</span> <span
							class="for-sale">For
							Sale</span></div> -->

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
									<h4><a href="Commerical-pr-detail.php?id=<?php echo $fetch['id'] ?>">
											<?php echo $fetch['type'] ?>
										</a></h4>
									<span class="utf-listing-address"><i class="icon-material-outline-location-on"></i>
										<?php echo $location_name['name'] ?>
									</span>
									<ul class="utf-listing-features">
										<li><i class="fa-solid fa-location-crosshairs"></i> Sq Ft<span>
												<?php echo $fetch['sqft'] ?>
											</span></li>
										<li><i class="fa-solid fa-building"></i>Cabins <span>
												<?php echo $fetch['cabins'] ?>
											</span></li>
										<li><i class="fa-solid fa-clipboard-user"></i>Carpet <span>
												<?php echo $fetch['carpet_area'] ?>
											</span></li>
										<li><i class="fa-solid fa-bath"></i>Washroom <span>
												<?php echo $fetch['washroom'] ?>
											</span></li>
									</ul>
								</div>
							</div>
						</div>
				<?php
					}
				}
				?>
				<!-- Listing Item / End -->

			</div>
			<!-- Listings Container / End -->

			<!-- Pagination -->
			<!-- <div class="utf-pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="blank">...</li>
						<li><a href="#">10</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</nav>
			</div> -->
			<!-- Pagination / End -->
		</div>


	</div>
</div>
<?php include("footer.php"); ?>