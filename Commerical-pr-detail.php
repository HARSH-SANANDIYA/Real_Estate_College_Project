<?php
include("header.php");
?>
    <div class="clearfix"></div>
    <!-- Main Navigation / End -->
  </div>
  <!-- Left Side Content / End -->


  <!-- Header Container / End -->

  <!-- Titlebar -->
  <div class="parallax titlebar" data-background="images/popular-location-04.jpg" data-color="rgba(48, 48, 48, 1)"
    data-color-opacity="0.8" data-img-width="800" data-img-height="505">
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
  <?php
include("connection.php");
include("url.php");
$id=$_GET['id'];
// $query="Select * from commerical c, commerical_details cd where  c.id = cd.property_id and c.id='$id'";
$query = "SELECT * FROM commerical_details as cd LEFT JOIN commerical ON commerical.id=cd.property_id WHERE cd.id='$id'";
$execute=mysqli_query($con,$query);
$fetch=mysqli_fetch_array($execute);
$a=$fetch['features'];

$lc = $fetch['location'];
$get_location = "SELECT `name` from `location` where `id`=$lc";
$execute_location = mysqli_query($con,$get_location);
$location=mysqli_fetch_array($execute_location);
?>
  <!-- Content -->
  <div class="container">
    <div class="row margin-bottom-50">
      <div class="col-md-12">
        <!-- Slider -->
        <div class="property-slider default">
          <a href="<?php echo $url.'/'.$fetch['image1']?>"
            data-background-image="<?php echo $url.'/'.$fetch['image1']?>" class="item mfp-gallery"></a>
          <a href="<?php echo $url.'/'.$fetch['image2']?>"
            data-background-image="<?php echo $url.'/'.$fetch['image2']?>" class="item mfp-gallery"></a>
          <a href="<?php echo $url.'/'.$fetch['image3']?>"
            data-background-image="<?php echo $url.'/'.$fetch['image3']?>" class="item mfp-gallery"></a>
          <a href="<?php echo $url.'/'.$fetch['image4']?>"
            data-background-image="<?php echo $url.'/'.$fetch['image4']?>" class="item mfp-gallery"></a>
          <a href="<?php echo $url.'/'.$fetch['image5']?>"
            data-background-image="<?php echo $url.'/'.$fetch['image5']?>" class="item mfp-gallery"></a>
        
        </div>
        <!-- Slider Thumbs -->
        <div class="property-slider-nav">
          <div class="item"><img src="<?php echo $url.'/'.$fetch['image1']?>" alt=""></div>
          <div class="item"><img src="<?php echo $url.'/'.$fetch['image2']?>" alt=""></div>
          <div class="item"><img src="<?php echo $url.'/'.$fetch['image3']?>" alt=""></div>
          <div class="item"><img src="<?php echo $url.'/'.$fetch['image4']?>" alt=""></div>
          <div class="item"><img src="<?php echo $url.'/'.$fetch['image5']?>" alt=""></div>
          <div class="item"><img src="<?php echo $url.'/'.$fetch['image6']?>" alt=""></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">

      <!-- Property Description -->
      <div class="col-lg-8 col-md-7">
        <!-- Titlebar -->
        <div id="titlebar-dtl-item" class="property-titlebar margin-bottom-0">
          <div class="property-title">
            <div class="property-pricing">Rs.<?php echo $fetch['rent']?></div>
            <h2><?php echo $fetch['type']?></h2>
            <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> <?php echo $location['name']?></span>
            <p><?php echo $fetch['address']; ?></p>
            <ul class="property-main-features">
              <li><i class="fa-solid fa-warehouse"></i>Space Type: <span><?php echo $fetch['space_type']?></span></li>
              <li><i class="fa-solid fa-minimize"></i>Area: <span><?php echo $fetch['sqft']?></span> Sq Ft</li>
              <li><i class="fa-solid fa-location-crosshairs"></i>Carpet Area: <span><?php echo $fetch['carpet_area']?></span> Sq Ft</li>
              <!-- <li><i class="fa-solid fa-clipboard-user"></i>Seat Count: <span><?php echo $fetch['seat']?></span></li> -->
              <li><i class="fa-solid fa-bath"></i>Washrooms: <span><?php echo $fetch['washroom']?></span></li>
              <li><i class="fa-solid fa-building"></i>Cabins: <span><?php echo $fetch['cabins'] == 6 ? 'More than 5':$fetch['cabins']?></span></li>
              <li><i class="fa-solid fa-couch"></i>Furnishing: <span><?php echo $fetch['furnishing']?></span></li>
              <li><i class="fa-solid fa-layer-group"></i>Available From: <span><?php echo $fetch['available_from']?></span></li>
              <li><i class="fa-solid fa-business-time"></i>Lock-In Period: <span><?php echo $fetch['lock_in_period']?> Months</span></li>
            </ul>
          </div>
        </div>

        <div class="property-description">
          <!-- Description -->
          <div class="utf-desc-headline-item">
            <h3><i class="icon-material-outline-description"></i> Property Description</h3>
          </div>
          <div class="show-mores">
            <p> <?php echo $fetch['description']?> </p>
            <!-- <a href="#" class="show-more-button">Show More <i class="sl sl-icon-plus"></i></a> -->
          </div>

          <!-- Details -->
          <div class="utf-desc-headline-item">
            <h3><i class="sl sl-icon-briefcase"></i> Property Details</h3>
          </div>
          <ul class="property-features margin-top-0">
            <li><i class="fa-solid fa-house-chimney-user"></i>Property ID: <span><?php echo $fetch['property_id']?></span></li>
            <li><i class="fa-solid fa-coins"></i>Price: <span>Rs.<?php echo $fetch['rent']?></span></li>
            <li><i class="fa-solid fa-minimize"></i>Property Size: <span><?php echo $fetch['sqft']?> Sq Ft</span></li>
            <li><i class="fa-regular fa-calendar-days"></i>Property Age: <span><?php echo $fetch['property_age']?></span></li>
            <!-- <li><i class="fa-solid fa-tags"></i>Vastu: <span><?php echo $fetch['vastu']?></span></li> -->
            <li><i class="fa-solid fa-shop"></i>Property Type: <span><?php echo $fetch['type']?></span></li>
            <li><i class="fa-solid fa-city"></i>Floor: <span><?php echo $fetch['floor']?></span></li>
          </ul>

          <!-- Features -->
          <div class="utf-desc-headline-item">
            <h3><i class="sl sl-icon-briefcase"></i> Property Features</h3>
          </div>
          <ul class="property-features checkboxes margin-top-0">
          <?php
$delimiter = ',';
$words = explode($delimiter, $a);

foreach ($words as $word) {
            ?>
            <li><?php echo $word ?></li>
            <?php
}
?>
          </ul>
          <div class="utf-desc-headline-item">
            <h3><i class="fa-solid fa-database"></i>Rent Details</h3>
          </div>
          <div class="style-1 fp-accordion">
            <div id="rent_details" class="HouseRentDetails">
              <div class="HouseCard" style="box-shadow: none;">
                <div class="content">
                  <div class="rentDetailsTab">
                    <div class="Expense relative">
                      <div class="ChargeTable rent">
                        <div class="chargeSection">
                          <div class="textSection">
                            <div class="title">Monthly Rent</div>
                            <!-- <div class="NavLink viewLink" title="View furnishing &amp; amenities">View furnishing &amp;amenities</div> -->
                          </div>
                          <div class="amountSection"><span class="rupee">₹</span><?php echo $fetch['rent']?></div>
                        </div>
                      </div>
                      <div class="securityDepositeWidget">
                        <div class="label">
                          <div class="text"><i class="fa-solid fa-shield-halved"></i>Security Deposit
                          </div>
                        </div>
                        <div class="securityDeposit">Only 2 months rent</div>
                      </div>
                      <div class="ChargeTable ">
                        <div class="chargeSection">
                          <div class="textSection">
                            <div class="title">One Time Fees</div>
                            <div class="subtext">We charges a one time accommodation convenience fee 
                            </div>
                            <!-- <div class="NavLink viewLink" title="What does it cover?">What does it cover?</div> -->
                          </div>
                          <div class="amountSection"><span class="rupee">₹</span><?php echo $fetch['security_deposit']?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>








          <!-- Video -->
          <!-- <div class="utf-desc-headline-item">
            <h3><i class="icon-feather-video"></i> Property Video</h3>
          </div>
          <div class="responsive-iframe">
            <iframe width="560" height="315" src="<?php echo $fetch['video']?>" allowfullscreen></iframe>
          </div> -->

          <!-- Location -->
          <!-- <div class="utf-desc-headline-item">
            <h3><i class="icon-material-outline-location-on"></i> Property Location</h3>
          </div>
          <div id="propertyMap-container">
            <div id="propertyMap" data-latitude="<?php echo $fetch['latitude']?>" data-longitude="<?php echo $fetch['longitude']?>" data-map-icon="im im-icon-Hamburger">
            </div>
          </div> -->



          <!-- Reviews -->

          <!-- <div class="clearfix"></div>
          <div class="margin-top-35"></div>
          <div class="utf-inner-blog-section-title">
            <h4><i class="icon-line-awesome-comments-o"></i> Leave Your Comment</h4>
          </div>
          <div class="margin-top-15"></div>
          <form id="add-comment" class="add-comment">
            <fieldset>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" placeholder="Name *" value="" />
                </div>
                <div class="col-md-6">
                  <input type="text" placeholder="Email Address *" value="" />
                </div>
                <div class="col-md-6">
                  <input type="text" placeholder="Phone Number *" value="" />
                </div>
                <div class="col-md-6">
                  <input type="text" placeholder="Subject" value="" />
                </div>
                <div class="col-md-12">
                  <textarea cols="30" placeholder="Comment..." rows="2"></textarea>
                </div>
              </div>
            </fieldset>
            <div class="utf-centered-button">
              <a href="#" class="button">Submit Comment</a>
            </div>
            <div class="clearfix"></div>
          </form> -->
        </div>
      </div>
      <!-- Property Description / End -->

      <!-- Sidebar -->
      <div class="col-lg-4 col-md-5">
        <div class="sidebar">
        <?php
              include("connection.php");
                $query='SELECT * FROM adbanner';
                $execute=mysqli_query($con,$query);
                $fetch=mysqli_fetch_array($execute)
              ?>
          <!-- Widget -->
          <div class="widget utf-sidebar-widget-item">
                <div class="utf-detail-banner-add-section">
                  <a href="<?php echo $fetch['link']?>"><img src="<?php echo $fetch['image']?>" alt="banner-add-2"></a>
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
        </div>
      </div>
      <!-- Sidebar / End -->
    </div>
  </div>
  <?php include("footer.php");?>