<?php
ob_start();
include("header.php");
?>
<div class="clearfix"></div>



<!-- Banner -->
<div class="parallax" data-color="#fff" data-color-opacity="0.72" data-img-width="2500" data-img-height="1600">
    <div class="utf-parallax-content-area">
        <div class="container">
            <div class="row">
                <div class="col-md-16">
                    <div class="utf-main-search-container-area">
                        <div class="utf-banner-headline-text-part">
                            <div class="utf-banner-headline-text-part-111">
                                <p>Rent local with locally & vocally Rooted Platform!</p>
                                <div class="utf-banner-headline-text-part-3text">
                                    <p> <i class="fa-regular fa-circle-dot"></i> Effortless search</p>
                                    <p> <i class="fa-regular fa-circle-dot"></i> Tailored assistance</p>
                                    <p> <i class="fa-regular fa-circle-dot"></i> Comfortable living</p>
                                </div>
                            </div>
                            <div class="video-banner">
                                <video autoplay class="slide-video slide-media" muted preload="metadata" loop>
                                    <source src="images/renting-app-8309415-6631715.mp4" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                        <form class="utf-main-search-form-item" action="" method="POST">
                            <div class="search-type">
                                <label class="active"><label>
                                        <div class="utf-search-type-arrow"></div>
                            </div>

                            <div class="utf-main-search-box-area">
                                <div class="row with-forms">
                                    <div class="col-md-2 col-sm-3">
                                        <select data-placeholder="Property Type" class="utf-chosen-select-single-item" name="type">
                                            <option selected disabled hidden>Property Type</option>
                                            <option value="residental">Residential</option>
                                            <option value="commerical">Commercial</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8 col-sm-6">
                                        <select data-placeholder="Enter Location..." title="Select Area" name="location[]" class="utf-chosen-select-single-item chosen-select" multiple>
                                            <option disabled>Select Area</option>
                                            <?php
                                            $query = "SELECT `id`,`name` from `location`";
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
                                    <div class="col-md-2 col-sm-3 col-xs-12">
                                        <input type="submit" name="search" href="#" class="button utf-search-btn-item">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['search']) && isset($_POST['location'])) {

    $type = (isset($_POST['type']));
    // $area = $_POST['location'];
    // print_r($area);
    // if ($area) {
    //     $location = implode(',', $area);
    // }
    // $location = $_POST['location'];
    $name = '';
    foreach ($_POST['location'] as $selectedOption)
        $name = "'" . $selectedOption . "'" . ',' . $name;
    if (strcmp($type, 'residental') == 0) {
        header('Location:property.php?location=' . $name);
    } else if ($type == 'commerical') {
        header('Location:Commerical-property.php?location=' . $name);
    } else {
    }
}

?>


<!-- Content -->
<section class="fullwidth" data-background-color="#ffffff">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                    <h3 class="headline"><span>Most Hot Properties</span>Residential Properties</h3>
                </div>
            </div>
            <div class="col-md-12">
                <div class="carousel">
                    <?php
                    $query = 'SELECT * FROM properties where verify=1 limit 4';
                    // $query = 'SELECT * FROM properties,properties_details where `name`="hot" limit 9';
                    $execute = mysqli_query($con, $query);
                    while ($fetch = mysqli_fetch_array($execute)) {
                    if($fetch['location']){
                        $location_id = $fetch['location']; 
                        $query2 = "SELECT * FROM `location` where id=$location_id";
                        $execute2 = mysqli_query($con, $query2);
                        $fetch2 = mysqli_fetch_array($execute2);
                    }
                    ?>
                        <div class="utf-carousel-item-area">
                            <div class="utf-listing-item">
                                <a href="property-detail.php?id=<?php echo $fetch['id'] ?>" class="utf-smt-listing-img-container">
                                    <div class="utf-listing-carousel-item">
                                        <div><img src="http://localhost/real-estate/images/commerical/<?php echo $fetch['image1'] ?>" alt=""></div>
                                        <!-- <div><img src="http://localhost/real-estate/images/commerical/<?php echo $fetch['image2'] ?>" alt=""></div>
                                        <div><img src="http://localhost/real-estate/images/commerical/<?php echo $fetch['image3'] ?>" alt=""></div> -->
                                    </div>
                                </a>
                                <div class="utf-listing-content">
                                    <div class="utf-listing-title">
                                        <span class="utf-listing-price">Rs.
                                            <?php echo $fetch['rent'] ?>
                                        </span>
                                        <h4><a href="property-detail.php?id=<?php echo $fetch['id'] ?>">
                                                <?php echo $fetch['furnishing'] ?>
                                            </a></h4>
                                        <ul class="property-main-features BHK-Furnished">
                                            <li><span>
                                                    <?php echo $fetch['bhk'] ?> BHK 
                                                </span></li>
                                        </ul>
                                        <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i>
                                            <?php echo $fetch2['name'] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
</section>

<!-- Featured -->
<div class="container">
    <div class="row">
        <div class="col-md-12 margin-top-75">
            <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                <h3 class="headline"><span>Demanded Commercial Properties</span>Commercial Properties</h3>
            </div>
        </div>
        <div class="col-md-12">
            <div class="utf-section-inline-item">
                <!-- Listing Item -->
                <?php
                $query = 'SELECT * FROM commerical WHERE verify=1 limit 4';
                $execute = mysqli_query($con, $query);
                while ($fetch = mysqli_fetch_array($execute)) {
                    if($fetch['location']){
                        $location_id = $fetch['location']; 
                        $query2 = "SELECT * FROM `location` where id=$location_id";
                        $execute2 = mysqli_query($con, $query2);
                        $fetch2 = mysqli_fetch_array($execute2);
                    }
                ?>
                    <div class="utf-carousel-item33-area">
                        <div class="utf-listing-item"> <a href="Commerical-pr-detail.php?id=<?php echo $fetch['id']; ?>" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item">
                                </div>
                                <img src="http://localhost/real-estate/images/commerical/<?php echo $fetch['image1'] ?>" alt="">
                            </a>
                            <div class="utf-listing-content">
                                <div class="utf-listing-title">
                                    <span class="utf-listing-price">Rs.
                                        <?php echo $fetch['rent'] ?>
                                    </span>
                                    <h4><a href="Commerical-pr-detail.php?id=<?php echo $fetch['id']; ?>">
                                            <?php echo $fetch['sqft'] ?> Sqft <?php echo $fetch['type'] ?>
                                        </a></h4>

                                    <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i>
                                        <?php echo $fetch2['name'] ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>

            <!-- Carousel / End -->
        </div>
    </div>
    <!-- Featured / End -->
</div>

<!-- Start Need Any Help -->
<section class="section padding-top-75 padding-bottom-75">
    <div class="container utf-section-headline-item-contents-data">
        <div class="col-md-12">
            <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                <h3 class="headline"><span>Looking for help in renting a house?</span>How is Real Estate different?</h3>
                <div class="utf-headline-display-inner-item">Looking for help in renting a house?</div>
            </div>
        </div>
        <div class="row need-help-area justify-content-center">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="info-box-1">
                    <div class="utf-icon-box-circle">
                        <div class="utf-icon-box-circle-inner"> <i class="fa-solid fa-group-arrows-rotate"></i></div>
                    </div>
                    <div class="info-box-1-contents-data">
                        <h4>FREE 360° Marketing</h4>
                        <p>We help you find tenants across 10+ Listing Portals, To-Let
                            boards, etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="info-box-1">
                    <div class="utf-icon-box-circle">
                        <div class="utf-icon-box-circle-inner"> <i class="fa-solid fa-user-shield"></i>
                        </div>
                    </div>
                    <div class="info-box-1-contents-data">
                        <h4>Verified Tenants</h4>
                        <p>We conduct KYC checks on all tenants, including identity & police verification.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
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
            <div class="col-md-4 col-sm-4 col-xs-12">
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
            <div class="col-md-4 col-sm-4 col-xs-12">
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



<!-- Photo Section -->
<div class="utf-photo-section-block">
    <div class="utf-photo-text-content white-font">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <h2>Do You Own Property?</h2>
                    <p>we provide a complete solution for managing your rental property needs. Our dedicated
                        team ensures that your property is in safe hands, helping you discover reliable
                        corporate tenants while maintaining the well-being of your rental investment.</p>
                    <p><b>Three Things to do:</b><br>
                        1. Tell Us About Your Property<br>
                        2. Set the Price <br>
                        3. Give Us the Keys
                    </p>
                    <a href="add-new-property.php#create-property" class="button margin-top-10">List Your
                        Property</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="download-img">
                        <img src="images/mock.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Photo Section / End -->



<!-- Fullwidth Section -->
<section class="fullwidth" data-background-color="#fbfbfb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                    <h3 class="headline"><span>What are we Offering you?</span> Properties Accessible In Most Embracing Places</h3>
                    <div class="utf-headline-display-inner-item">What are you looking for?</div>
                    <!-- <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum
                been industry standard dummy text ever since when unknown printer took a galley.</p> -->
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="utf-icon-box-item-area">
                    <div> <img src="images/Modern Apartments.png" alt=""></div>
                    <h3>Modern Apartments</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="utf-icon-box-item-area">
                    <div> <img src="images/Bungalows.png" alt=""></div>
                    <h3>Bungalows</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="utf-icon-box-item-area">
                    <div> <img src="images/Shops & Showroom.png" alt=""></div>
                    <h3>Shops & Showroom</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="utf-icon-box-item-area">
                    <div> <img src="images/Offices.png" alt=""></div>
                    <h3>Offices</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="gallery-container-grid" style="margin-top: 40px;">
    <div class="grid-block block-num-1 gallery-img-block">
        <div class="gallery-overlay"></div>
        <img data-src="//neemans.com/cdn/shop/files/Homepage_Grid_relive_knit_sneaker.jpg?v=1690567238" loading="lazy" alt="" width="700" height="1014" class="gallery-img lazy" src="images/Newfolder/BE32E211-8EC9-4AA3-92BB-C6C81D2E5158_1_201_a.jpg">
    </div>
    <div class="grid-block block-num-2 gallery-img-block">
        <div class="gallery-overlay"></div>
        <img data-src="//neemans.com/cdn/shop/files/Relive_knit_loafers_homepage_grid_6.jpg?v=1688997950" loading="lazy" alt="" width="548" height="540" class="gallery-img lazy" src="images/Newfolder/hotel-facade.jpg">
    </div>
    <div class="grid-block block-num-3 gallery-img-block">
        <div class="gallery-overlay"></div>
        <img data-src="//neemans.com/cdn/shop/files/Homepage_Grid_Eco_flips.jpg?v=1690567236" loading="lazy" alt="" width="548" height="450" class="gallery-img lazy" src="images/Newfolder/Privilon-3-1024x576.webp">
    </div>

    <div class="grid-block block-num-4 gallery-text-block">
        <h2 class="content-heading">Ahmedabad is a locale that turns moments into stories</h2>
        <p class="content-para">Step into our locality, an evolving gem in Ahmedabad known for its well-planned infrastructure and modern conveniences. Experience the perfect fusion of urban vitality and strong community, enhancing your way of life.
            <br><br>#Dekhoge To Janoge
        </p>
    </div>

    <div class="grid-block block-num-5 gallery-img-block">
        <div class="gallery-overlay"></div>
        <img data-src="//neemans.com/cdn/shop/files/Cotton_classics_homepage_grid_4.jpg?v=1688997950" loading="lazy" alt="" width="548" height="540" class="gallery-img lazy" src="images/Newfolder/horizontal1.jpg">
    </div>
    <div class="grid-block block-num-6 gallery-img-block">
        <div class="gallery-overlay"></div>
        <img data-src="//neemans.com/cdn/shop/files/Relive_Knit_slipons_homepage_grid_5.jpg?v=1688997950" loading="lazy" alt="" width="548" height="450" class="gallery-img lazy" src="images/Newfolder/horizontal2.jpg">
    </div>
    <div class="grid-block block-num-7 gallery-img-block">
        <div class="gallery-overlay"></div>
        <img data-src="//neemans.com/cdn/shop/files/Eco_slides_homepage_grid_1.jpg?v=1688997951" loading="lazy" alt="" width="700" height="1014" class="gallery-img lazy" src="images/Newfolder/vertical2.jpg">
    </div>
</div>
<?php include("footer.php"); ?>
<script>
    $(".chosen-select").chosen({
        no_results_text: "Oops, nothing found!"
    });

    $(".chosen-select").chosen().change(function() {
        $(this).trigger("chosen:updated");
    });

    $(".chosen-select").keydown(function(e) {
        if (e.keyCode == 8 && $(this).val() === "") {
            var chosen = $(this).data("chosen");
            chosen.results_build();
            chosen.result_remove_highlighted();
            return false;
        }
    });
</script>
