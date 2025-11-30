<?php
include("header.php");
include("connection.php");
?>
<style>
	/* CSS to style error messages */
	.error {
		color: red;
		/* Set error message color to red */
		font-size: 14px;
		/* Optional: Adjust font size */
		margin-top: 5px;
		/* Optional: Add space between input and error message */
	}
</style>
<?php
// Turn off error reporting
//error_reporting(0);

// Report runtime errors
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL & ~E_WARNING);

// Report all errors
//error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
//ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
//error_reporting(E_ALL & ~E_NOTICE);
?>
<div class="clearfix"></div>
<!-- Titlebar -->
<div class="parallax titlebar" data-background="images/popular-location-01.jpg" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
	<div id="titlebar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Add New Property</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Add New Property</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	.food-menu-style2 a:before {
		content: "";
		position: absolute;
		left: 50%;
		bottom: 0;
		width: 22px;
		height: 22px;
		margin-bottom: -11px;
		background-color: inherit;
		transform: translateX(-50%) rotate(45deg);
		border-bottom: 1px solid;
		border-right: 1px solid;
		border-color: inherit;
		border: 2px solid red;
	}
</style>
<div class="utf-parallax-content-area" style="margin: 0; padding: 0; z-index: 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="utf-main-search-container-area">
					<div class="utf-banner-headline-text-part" style=" justify-content: center;">
						<h2 style="font-weight: bolder; font-size: 44px;">List Your Property as <span class="typed-words"></span></h2>
					</div>
				</div>
				<div class="res-com-btu">
					<button onclick="myFunction()" id="residentialbutton">Residential</button>
					<button onclick="myFunction1()" id="commericalbutton">Commerical</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<!-- Content -->
<div class="container" style="margin-top: 0px;" id="Residential">
	<div class="row">
		<!-- Submit Page -->
		<div class="col-md-12">
			<div class="submit-page">
				<h3>Residential - Property Basic Information</h3>
				<form method='POST' enctype="multipart/form-data" id="commentForm">
					<div class="utf-submit-page-inner-box">
						<!-- <h3>Residential - Property Basic Information</h3>
					<form method='POST' enctype="multipart/form-data" id="commentForm"> -->
						<div class="content with-padding">
							<div class="col-md-12">
								<?php
									$email = $_SESSION['email'];
									$sql = "SELECT id FROM login where email = '$email' ";
									$execute = mysqli_query($con,$sql);
									$fetch = mysqli_fetch_array($execute);
									$useridr = $fetch['id'];
								?>

								<input type="hidden"  name="user_id" value="<?php echo $useridr; ?>">
							</div>
							<div class="col-md-12">
								<h5>Society Name</h5>
								<input class="search-field" placeholder="Society Name" type="text" value="" name="title" required />
							</div>

							<div class="col-md-4">
								<h5>Type</h5>
								<select class="" name="type">
									<option value="">Select an Option</option>
									<option value="Flat">Flat</option>
									<option value="Bungalow">Bungalow</option>
								</select>
							</div>

							<div class="col-md-4">
								<h5>BHK</h5>
								<select class="" name="bhk">
									<!-- <select class="utf-chosen-select-single-item" name="bhk"> -->
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="1">1 BHK</option>
									<option value="2">2 BHK</option>
									<option value="3">3 BHK</option>
									<option value="4">4 BHK</option>
									<option value="5">5 BHK</option>
									<option value="6">More Then 5</option>
								</select>
							</div>

							<div class="col-md-4">
								<h5>Area</h5>
								<div class="select-input disabled-first-option">
									<input type="text" placeholder="00000" data-unit="Sq Ft" name="sqft">
								</div>
							</div>

							<div class="col-md-4">
								<h5>Rent (Including Maintenance)</h5>
								<div class="select-input disabled-first-option">
									<input type="text" placeholder="00000" data-unit="" name="rent">
								</div>
							</div>

							<div class="col-md-4">
								<h5>Security Deposit</h5>
								<select class="" name="deposit">
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="1">1 Months</option>
									<option value="2">2 Months</option>
								</select>
							</div>

							<div class="col-md-4">
								<h5>Available From</h5>
								<input type="date" name="available_from">
							</div>
						</div>
					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="utf-submit-page-inner-box">
						<h3>Property Location</h3>
						<div class="content with-padding">
							<div class="col-md-6">
								<h5>Address</h5>
								<input type="text" placeholder="Address" name="address">
							</div>
							<div class="col-md-6">
								<h5>City Name</h5>
								<input type="text" placeholder="City Name" name="location">
							</div>
							<div class="col-md-6">
								<h5>State</h5>
								<input type="text" placeholder="State" name="state">
							</div>
							<div class="col-md-6">
								<h5>Zip-Code</h5>
								<input type="text" placeholder="000000" name="pincode">
							</div>
						</div>
					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="utf-submit-page-inner-box">
						<h3>Property Information</h3>
						<div class="content with-padding">
							<div class="col-md-12">
								<h5>Property Description</h5>
								<textarea name="description" cols="20" rows="2" id="summary"></textarea>
							</div>
							<div class="col-md-4">
								<h5>Building Age</h5>
								<select class="" name="property_age">
									<option label="blank"></option>
									<option value="">Select an Option</option>
									<option value="0 - 1 Years">0 - 1 Years</option>
									<option value="1 - 5 Years">1 - 5 Years</option>
									<option value="5 -10 Years">5 - 10 Years</option>
									<option value="10+ Years">10 + Years</option>

								</select>
							</div>

							<div class="col-md-4">
								<h5>Bed Rooms</h5>
								<select class="" name="bed">
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">More than 5</option>
								</select>
							</div>

							<div class="col-md-4">
								<h5>Bath Rooms</h5>
								<select class="" name="bath">
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">More than 5</option>
								</select>
							</div>

							<div class="col-md-4">
								<h5>Balconies</h5>
								<select class="" name="balconies">
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">More than 5</option>
								</select>
							</div>

							<div class="col-md-4">
								<h5>Furnishing</h5>
								<select class="" name="furnishing">
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="Unfurnished">Unfurnished</option>
									<option value="Semi Furnished">Semi Furnished</option>
									<option value="Full Furnished">Full Furnished</option>
								</select>
							</div>

							<div class="col-md-4">
								<h5>Tenant Type</h5>
								<select class="" name="tenant">
									<option value="">Select an Option</option>
									<option value="Family">Family</option>
									<option value="Single Person">Single Person</option>
									<option value="Bachelors">Bachelors</option>
								</select>
							</div>

							<div class="col-md-12">
								<h5 class="margin-top-15">Amenities</h5>
								<div class="checkboxes in-row margin-bottom-20">

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
							</div>
						</div>
					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="utf-submit-page-inner-box">
						<h3>Property Gallery</h3>
						<div class="content with-padding">
							<div class="col-md-12 submit-section">
								<h3>Images</h3>
								<input type="file" id="properties_img" class="dropzone" name="files[]" multiple>
							</div>
						</div>
					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="utf-submit-page-inner-box">
						<h3>Property Contact Details</h3>
						<div class="content with-padding">
							<div class="col-md-4">
								<h5>Full Name</h5>
								<input type="text" placeholder="Name" name="name">
							</div>
							<div class="col-md-4">
								<h5>Email Address</h5>
								<input type="text" placeholder="Email Address" name="email">
							</div>
							<div class="col-md-4">
								<h5>Phone Number</h5>
								<input type="text" placeholder="Phone Number" name="contact">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="button" id="properties_id" class="utf-centered-button button" value="Submit Property" name="submit">
						</div>
					</div>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Content -->
<div class="container" id="Commerical" style="display: none;">
	<div class="row">

		<!-- Submit Page -->
		<div class="col-md-12">
			<div class="submit-page">
				<form method='POST' action='' enctype="multipart/form-data" id="commercial_form">
					<div class="utf-submit-page-inner-box" id="Commercial">
						<h3>Commercial - Property Basic Information</h3>
						<div class="content with-padding">
							<!-- <form method='POST' action='' enctype="multipart/form-data" id="commercial_form"> -->
							<div class="col-md-12">
								<h5>Society Name</h5>
								<input class="search-field" placeholder="Society Name" type="text" value="" name="title" />
							</div>

							<div class="col-md-6">
								<h5>Type</h5>
								<select class="" name="type">
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="Office Space">Office Space</option>
									<option value="Shops & Retail">Shops & Retail</option>
									<option value="Showroom">Showroom</option>
								</select>
							</div>

							<div class="col-md-6">
								<h5>Space Type</h5>
								<select class="" name="space_type">
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="Shop">Shop</option>
									<option value="Office">Office</option>
								</select>
							</div>


							<div class="col-md-6">
								<h5>Area</h5>
								<div class="select-input disabled-first-option">
									<input type="text" placeholder="00000" data-unit="Sq Ft" name="Area">
								</div>
							</div>

							<div class="col-md-6">
								<h5>Carpet Area</h5>
								<div class="select-input disabled-first-option">
									<input type="text" placeholder="00000" data-unit="Sq Ft" name="Carpet_Area">
								</div>
							</div>


							<div class="col-md-4">
								<h5>Rent (Including Maintenance)</h5>
								<div class="select-input disabled-first-option">
									<input type="text" placeholder="00000" data-unit="Rs." name='rent'>
								</div>
							</div>

							<div class="col-md-4">
								<h5>Security Deposit</h5>
								<select class="" name="security_deposit">
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="1">1 Months</option>
									<option value="2">2 Months</option>
								</select>
							</div>

							<div class="col-md-4">
								<h5>Available From</h5>
								<input type="date" name="available_from">
							</div>

							<div class="col-md-4">
								<h5>Lock-In Period</h5>
								<input type="text" placeholder="Lock-In Period" name="lockinperiod">
							</div>
						</div>
					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="utf-submit-page-inner-box">
						<h3>Property Location</h3>
						<div class="content with-padding">
							<div class="col-md-6">
								<?php
									$email = $_SESSION['email'];
									$sql = "SELECT id FROM login where email = '$email' ";
									$execute = mysqli_query($con,$sql);
									$fetch = mysqli_fetch_array($execute);
									$userid = $fetch['id'];
								?>

								<input type="hidden"  name="user_id" value="<?php echo $userid; ?>">
							</div>
							<div class="col-md-6">
								<h5>Address</h5>
								<input type="text" placeholder="Address" name="address">
							</div>
							<div class="col-md-6">
								<h5>City Name</h5>
								<input type="text" placeholder="City Name" name="city_name">
							</div>
							<div class="col-md-6">
								<h5>State</h5>
								<input type="text" placeholder="State" name="state">
							</div>
							<div class="col-md-6">
								<h5>Zip-Code</h5>
								<input type="text" placeholder="000000" name="zip_code">
							</div>
						</div>
					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="utf-submit-page-inner-box">
						<h3>Property Information</h3>
						<div class="content with-padding">
							<div class="col-md-12">
								<h5>Property Description</h5>
								<textarea name="description" cols="20" rows="2" id="summary"></textarea>
							</div>
							<div class="col-md-4">
								<h5>Building Age</h5>
								<select class="" name="building_age">
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="0 - 1 Years">0 - 1 Years</option>
									<option value="1 - 5 Years">1 - 5 Years</option>
									<option value="5 - 10 Years">5 - 10 Years</option>
									<option value="10 - 20 Years">10 - 20 Years</option>
									<option value="20 + Years">20 + Years</option>

								</select>
							</div>
							<div class="col-md-4">
								<h5>Furnishing</h5>
								<select class="" name="furnishing">
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="Unfurnished">Unfurnished</option>
									<option value="Semi Furnished">Semi Furnished</option>
									<option value="Full Furnished">Full Furnished</option>
								</select>
							</div>
							<div class="col-md-4">
								<h5>Cabins</h5>
								<select class="" name="cabins">
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">More than 5</option>
								</select>
							</div>

							<div class="col-md-6">
								<h5>Washroom</h5>
								<select class="" name="washroom">
									<!-- <option label="blank"></option> -->
									<option value="">Select an Option</option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>

							<div class="col-md-6">
								<h5>Workstation</h5>
								<input type="text" placeholder="Workstation" name="workstation">
							</div>

							<div class="col-md-6">
								<h5>Floor</h5>
								<input type="text" placeholder="Ex: 6th Floor/Ground Floor/Basement" name="floor">
							</div>




							<div class="col-md-12">
								<h5 class="margin-top-15">Amenities</h5>
								<div class="checkboxes in-row margin-bottom-20">

									<input type="checkbox" name="check[]" value="Air Condition (AC)" id="Air Condition1 (AC)">
									<label for="Air Condition1 (AC)">Air Condition (AC)</label>

									<input id="Fan1" type="checkbox" name="check[]" value="Fan">
									<label for="Fan1">Fan</label>

									<input id="Light1" type="checkbox" name="check[]" value="Light">
									<label for="Light1">Light</label>

									<input id="Alloted Parking1" type="checkbox" name="check[]" value="Alloted Parking">
									<label for="Alloted Parking1">Alloted Parking</label>

									<input id="Common Parking1" type="checkbox" name="check[]" value="Common Parking">
									<label for="Common Parking1">Common Parking</label>

									<input id="Cleaning Service1" type="checkbox" name="check[]" value="Cleaning Service">
									<label for="Cleaning Service1">Cleaning Service</label>

									<input id="Elevator1" type="checkbox" name="check[]" value="Elevator">
									<label for="Elevator1">Elevator</label>

								</div>
							</div>
						</div>
					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="utf-submit-page-inner-box">
						<h3>Property Gallery</h3>
						<div class="content with-padding">
							<div class="col-md-12 submit-section">
								<h3>Images</h3>
								<input type="file" class="dropzone" id="profile-img" name="files[]" multiple>
							</div>
						</div>
					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="utf-submit-page-inner-box">
						<h3>Property Contact Details</h3>
						<div class="content with-padding">
							<div class="col-md-4">
								<h5>Full Name</h5>
								<input type="text" placeholder="Name" name="name">
							</div>
							<div class="col-md-4">
								<h5>Email Address</h5>
								<input type="text" placeholder="Email Address" name="email">
							</div>
							<div class="col-md-4">
								<h5>Phone Number</h5>
								<input type="text" placeholder="Phone Number" id="number" name="number">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="button" id="commercial_form_submit" class="utf-centered-button button" value="Submit Property" name="submit1">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>
<!-- Sign In Popup -->
<div id="utf-signin-dialog-block" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
	<div class="utf-popup-container-part-tabs" class="modal-content">
		<!-- Login -->
		
		<!-- Start Need Any Help -->


		<section class="section padding-top-75 padding-bottom-75">
			<div class="container utf-section-headline-item-contents-data">
				<div class="col-md-12">
					<div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
						<h3 class="headline"><span>Need Any Help?</span>How is Real Estate different?</h3>
					</div>
				</div>
				<div class="row need-help-area justify-content-center">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="info-box-1">
							<div class="utf-icon-box-circle">
								<div class="utf-icon-box-circle-inner"> <i class="fa-solid fa-group-arrows-rotate"></i></div>
							</div>
							<div class="info-box-1-contents-data">
								<h4>FREE 360° Marketing</h4>
								<p>We help you find tenants across 10+ Listing Portals, Verified Brokers, To-Let
									boards, etc.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="info-box-1">
							<div class="utf-icon-box-circle">
								<div class="utf-icon-box-circle-inner"> <i class="fa-solid fa-user-shield"></i>
								</div>
							</div>
							<div class="info-box-1-contents-data">
								<h4>Verified Tenants</h4>
								<p>We conduct KYC checks on all tenants, including identity & police verification.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="info-box-1">
							<div class="utf-icon-box-circle">
								<div class="utf-icon-box-circle-inner"> <i class="fa-solid fa-handshake"></i></div>
							</div>
							<div class="info-box-1-contents-data">
								<h4>Free Assisted Visits</h4>
								<p>Our property managers provide unlimited house visits for interested customers.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="info-box-1">
							<div class="utf-icon-box-circle">
								<div class="utf-icon-box-circle-inner"> <i class="fa-solid fa-comments-dollar"></i>
								</div>
							</div>
							<div class="info-box-1-contents-data">
								<h4>Best Price Guidance</h4>
								<p>We provide real-time, market-driven pricing guidance to help you get the best
									rent possible</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="info-box-1">
							<div class="utf-icon-box-circle">
								<div class="utf-icon-box-circle-inner"> <i class="fa-solid fa-award"></i></div>
							</div>
							<div class="info-box-1-contents-data">
								<h4>Property Maintenance</h4>
								<p>We inspect the property regularly & offer on-demand services to maintain it.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Need Any Help -->


		<!-- Fullwidth Section -->
		<section class="fullwidth" data-background-color="#fbfbfb" style="padding-bottom: 0px;">
			<div class="container" style="width: 95%;">
				<div class="row">
					<div class="col-md-12">
						<div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
							<h3 class="headline"><span>We make your property work for you</span> We work hard to
								ensure your investment is always making money.</h3>
							<div class="utf-headline-display-inner-item">We make your property work for you</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="undefined style_section__ULNMX " id="offerings">
			<div class="style_container__VSTPa">
				<div class="style_plansTable__lhkLX">
					<div class="style_titles__T5riM">
						<div class="style_title__QI9x8 style_wideTitle__QuzEM">Services Offered</div>
						<div class="style_title__QI9x8">With Bopal Local</div>
						<div class="style_title__QI9x8">Other Listing Portals</div>
						<div class="style_title__QI9x8 style_hiddenXs___KSol">Real-estate Agents</div>
					</div>
					<div class="style_plansWrapper__bHAEU">
						<ul class="style_listUl__UaC44">
							<li class="style_listTitle__b03Z6 style_listLi__P4U9C">Renting Price Guidance</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
							<li class="style_listLi__P4U9C style_hiddenXs___KSol ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
						</ul>
						<ul class="style_listUl__UaC44">
							<li class="style_listTitle__b03Z6 style_listLi__P4U9C">Online Marketing on own website
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C style_hiddenXs___KSol ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
						</ul>
						<ul class="style_listUl__UaC44">
							<li class="style_listTitle__b03Z6 style_listLi__P4U9C">Online Marketing on multiple
								websites</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
							<li class="style_listLi__P4U9C style_hiddenXs___KSol ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
						</ul>
						<ul class="style_listUl__UaC44">
							<li class="style_listTitle__b03Z6 style_listLi__P4U9C">Offline Marketing in &amp; around
								the house</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
							<li class="style_listLi__P4U9C style_hiddenXs___KSol ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
						</ul>
						<ul class="style_listUl__UaC44">
							<li class="style_listTitle__b03Z6 style_listLi__P4U9C">Physical House Visits for Tenants
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
							<li class="style_listLi__P4U9C style_hiddenXs___KSol ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
						</ul>
						<ul class="style_listUl__UaC44">
							<li class="style_listTitle__b03Z6 style_listLi__P4U9C">Virtual House Tours for Tenants
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C style_hiddenXs___KSol ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
						</ul>
						<ul class="style_listUl__UaC44">
							<li class="style_listTitle__b03Z6 style_listLi__P4U9C">Tenant Background Verification
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
							<li class="style_listLi__P4U9C style_hiddenXs___KSol ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
						</ul>
						<ul class="style_listUl__UaC44">
							<li class="style_listTitle__b03Z6 style_listLi__P4U9C">Rent Agreement &amp; Paperwork
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
							<li class="style_listLi__P4U9C style_hiddenXs___KSol ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
						</ul>
						<ul class="style_listUl__UaC44">
							<li class="style_listTitle__b03Z6 style_listLi__P4U9C">Move-in &amp; Move-out Video
								Reports</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
							<li class="style_listLi__P4U9C style_hiddenXs___KSol ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
						</ul>
						<ul class="style_listUl__UaC44">
							<li class="style_listTitle__b03Z6 style_listLi__P4U9C">Property Maintenance &amp;
								Repairs</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
							<li class="style_listLi__P4U9C style_hiddenXs___KSol ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
						</ul>
						<ul class="style_listUl__UaC44">
							<li class="style_listTitle__b03Z6 style_listLi__P4U9C">Dedicated Relationship Manager
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
							<li class="style_listLi__P4U9C  ">
								<div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img class="style_cross__ITFhg" src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png" alt="Cross" width="10" height="10"></div>
							</li>
							<li class="style_listLi__P4U9C style_hiddenXs___KSol ">
								<div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff" width="12" height="12">
										<polygon points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
										</polygon>
									</svg></div>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</div>

	</div>

</div>
<!-- Sign In Popup / End -->
<script>
	if (location.hash === "#create-property") {
		$.magnificPopup.open({
			items: {
				src: '#utf-signin-dialog-block'
			},
			type: 'inline',
			fixedContentPos: true,
			fixedBgPos: true,
			overflow: 'hidden',
			closeBtnInside: true,
			closeOnBgClick: false,
			preloader: false,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		}, 0);
	}
</script>
<script>
	function myFunction() {
		var x = document.getElementById("Residential");
		var y = document.getElementById("Commerical");
		x.style.display = "block";
		y.style.display = "none";
		var button = document.getElementbyId("residentialbutton");
		button.style.background = "black";

	}

	function myFunction1() {
		var x = document.getElementById("Residential");
		var y = document.getElementById("Commerical");
		x.style.display = "none";
		y.style.display = "block";

	}
	const btn = document.getElementById('residentialbutton');

	btn.addEventListener('click', function onClick() {
		btn.style.backgroundColor = '#142b6f';
		btn1.style.backgroundColor = '#f2612a';
	});
	const btn1 = document.getElementById('commericalbutton');

	btn1.addEventListener('click', function onClick() {
		btn1.style.backgroundColor = '#142b6f';
		btn.style.backgroundColor = '#f2612a';
	});

	$("#list_form").click(function() {
		var name = $("#name").val();
		var phone_number = $("#ibadd").val();
		if (name == '' || phone_number == '') {
			swal("Oops!!", "Looks like you missed some fields. Please check and try again!", "error");
		} else {
			$.ajax({
				type: 'post',
				url: 'http://localhost/real-estate/list_properties.php',
				data: {
					full_name: name,
					phone_number: phone_number
				},
				success: function(data) {
					if (data == 'success') {
						swal("Success", "Data Saved Successfully", "success");
						$("#name").val('');
						$("#ibadd").val('');
					} else {
						swal("Error!", "Something went wrong!", "error");
					}
				},
				error: function(xhr, thrownError, ajaxOptions) {
					swal("Error!", "Something went wrong!", "error");
				},
			});
		}
	});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
	$(document).ready(function() {
		$("#commentForm").validate({
			rules: {
				title: "required",
				type: "required",
				bhk: "required",
				sqft:
				{
					required: true,
					digits: true
				},
				rent: "required",
				deposit: "required",
				available_from: "required",
				address: "required",
				location: "required",
				state: "required",
				pincode: {
					required: true,
					digits: true,
					minlength: 6
				},
				description: "required",
				property_age: "required",
				bed: "required",
				bath: "required",
				balconies: "required",
				furnishing: "required",
				tenant: "required",
				"check[]": "required",
				"files[]": {
					required: true,
					// accept: "image/*"
				},
				name: "required",
				email: {
					required: true,
					email: true
				},
				contact: {
					required: true,
					digits: true,
					minlength: 10
				}
			},
			messages: {

				title: "Please enter society name",
				type: "Please select type",
				bhk: "Please select BHK",
				sqft:
				{
					required: "Please enter area",
					digits: "Please enter only digits",
				},
				rent: "Please enter rent",
				deposit: "Please select security deposit",
				available_from: "Please select available from date",
				address: "Please enter address",
				location: "Please enter city name",
				state: "Please enter state",
				pincode: {
					required: "Please enter pincode",
					digits: "Please enter only digits",
					minlength: "Please enter at least 6 characters"
				},
				description: "Please enter property description",
				property_age: "Please select building age",
				bed: "Please select number of bedrooms",
				bath: "Please select number of bathrooms",
				balconies: "Please select number of balconies",
				furnishing: "Please select furnishing",
				tenant: "Please select tenant type",
				"check[]": "Please select at least one amenity",
				"files[]": {
					required: "Please upload at least one image",
					// accept: "Only image files are allowed"
				},
				name: "Please enter your full name",
				email: {
					required: "Please enter your email address",
					email: "Please enter a valid email address"
				},
				contact: {
					required: "Please enter your phone number",
					digits: "Please enter only digits",
					minlength: "Please enter at least 10 digits"
				}
			},
		});

		$("#properties_id").click(function() {
			if ($("#commentForm").valid()) {
				var formData = new FormData();
				$("#commentForm").serializeArray().forEach(function(input) {
					console.log(input);
					formData.append(input.name, input.value);
				});
				var files = $('#properties_img').prop('files');

				for (var i = 0; i < files.length; i++) {
					formData.append('files[]', files[i]);
				}
				$.ajax({
					type: "POST",
					url: "http://localhost/real-estate/add-new-resident-user.php",
					data: formData,
					processData: false,
					contentType: false,
					success: function(response) {
						if (response == 'success') {
							swal("Success!", "Form submitted successfully.", "success");
							$("#commentForm")[0].reset();
						} else {
							swal("Error!", "An error occurred while submitting the form.", "error");
						}
					},
					error: function(xhr, status, error) {
						swal("Error!", "An error occurred while submitting the form.", "error");
					}
				});
			}
		});

		$("#commercial_form").validate({
			rules: {
				title: "required",
				type: "required",
				space_type: "required",
				Area: {
					required: true,
					digits: true
				},
				Carpet_Area: {
					required: true,
					digits: true
				},
				rent: "required",
				security_deposit: "required",
				available_from: "required",
				lockinperiod: "required",
				address: "required",
				city_name: "required",
				state: "required",
				zip_code: {
					required: true,
					digits: true,
					minlength: 6
				},
				description: "required",
				building_age: "required",
				furnishing: "required",
				cabins: "required",
				washroom: "required",
				workstation: "required",
				floor: "required",
				"check[]": "required",
				"files[]": {
					required: true,
					// accept: "image/*"
				},
				name: "required",
				email: {
					required: true,
					email: true
				},
				number: {
					required: true,
					digits: true,
					minlength: 10
				}
			},
			messages: {

				title: "Please enter society name",
				type: "Please select type",
				space_type: "Please select space type",
				Area: {
					required: "Please enter area",
					digits: "Please enter only digits",
				},
				Carpet_Area: {
					required: "Please enter carpet area",
					digits: "Please enter only digits",
				},
				rent: "Please enter rent",
				security_deposit: "Please select security deposit",
				available_from: "Please select available from",
				lockinperiod: "Please enter lock-in period",
				address: "This field is required",
				city_name: "This field is required",
				state: "Please enter state",
				zip_code: {
					required: "Please enter zipcode",
					digits: "Please enter only digits",
					minlength: "Please enter at least 6 characters"
				},
				description: "Please enter property description",
				building_age: "Please enter building age",
				furnishing: "Please select furnishing",
				cabins: "Please select cabin",
				washroom: "Please select washroom",
				workstation: "Please enter workstation",
				floor: "Please enter floor",
				"check[]": "Please select at least one amenity",
				// "files[]": {
				// 	required: "Please upload at least one image",
				// 	accept: "Only image files are allowed"
				// },
				name: "Please enter your full name",
				email: {
					required: "Please enter your email address",
					email: "Please enter a valid email address"
				},
				number: {
					required: "Please enter your phone number",
					digits: "Please enter only digits",
					minlength: "Please enter at least 10 digits"
				}
			},
		});

		$("#commercial_form_submit").click(function() {
			if ($("#commercial_form").valid()) {
				var formData = new FormData();
				$("#commercial_form").serializeArray().forEach(function(input) {
					formData.append(input.name, input.value);
				});
				var files = $('#profile-img').prop('files');

				for (var i = 0; i < files.length; i++) {
					formData.append('files[]', files[i]);
				}
				$.ajax({
					type: "POST",
					url: "http://localhost/real-estate/add-new-commercial-user.php",
					data: formData,
					processData: false,
					contentType: false,
					success: function(response) {
						if (response == 'success') {
							swal("Success!", "Form submitted successfully.", "success");
							$("#commercial_form")[0].reset();
						} else {
							swal("Error!", "An error occurred while submitting the form.", "error");
						}
					},
					error: function(xhr, status, error) {
						swal("Error!", "An error occurred while submitting the form.", "error");
					}
				});
			}
		});

	});
</script>