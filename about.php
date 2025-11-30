<?php
include("header.php");
?>
        <div class="clearfix"></div>

        <!-- Titlebar -->
        <div class="parallax titlebar" data-background="images/listing-02.jpg" data-color="rgba(48, 48, 48, 1)"
            data-color-opacity="0.8" data-img-width="800" data-img-height="505">
            <div id="titlebar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>About Us</h2>
                            <!-- Breadcrumbs -->
                            <nav id="breadcrumbs">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li>About Us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
              include("connection.php");
                $query='SELECT * FROM about';
                $execute=mysqli_query($con,$query);
                $fetch=mysqli_fetch_array($execute)
              ?>
        <!-- Contact -->
        <div class="margin-top-65 padding-bottom-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <img src="images/group-people-working-out-business-plan-office.jpg" alt="" />
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p><?php echo $fetch['about1']?></p>
                        <blockquote class="margin-bottom-20"><?php echo $fetch['about2']?> </blockquote>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-6">
                        <p><?php echo $fetch['about3']?></p>
                        <ul class="list-2">
                            <?php
                            if($fetch['point1']!='')
                            {
                                ?>
                         
                            <li><?php echo $fetch['point1']?></li>
                            <?php
                            }
                            ?>
                             <?php
                            if($fetch['point2']!='')
                            {
                                ?>
                         
                            <li><?php echo $fetch['point2']?></li>
                            <?php
                            }
                            ?>
                              <?php
                            if($fetch['point3']!='')
                            {
                                ?>
                         
                            <li><?php echo $fetch['point3']?></li>
                            <?php
                            }
                            ?>
                              <?php
                            if($fetch['point4']!='')
                            {
                                ?>
                         
                            <li><?php echo $fetch['point4']?></li>
                            <?php
                            }
                            ?>
                              <?php
                            if($fetch['point5']!='')
                            {
                                ?>
                         
                            <li><?php echo $fetch['point5']?></li>
                            <?php
                            }
                            ?>
                    </div>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Container / End -->







    <div class="gallery-container-grid" style="margin-top: 40px;">
        <div class="grid-block block-num-1 gallery-img-block">
            <div class="gallery-overlay"></div>
            <img data-src="//neemans.com/cdn/shop/files/Homepage_Grid_relive_knit_sneaker.jpg?v=1690567238"
                loading="lazy" alt="" width="700" height="1014" class="gallery-img lazy"
                src="images/Newfolder/BE32E211-8EC9-4AA3-92BB-C6C81D2E5158_1_201_a.jpg">
        </div>
        <div class="grid-block block-num-2 gallery-img-block">
            <div class="gallery-overlay"></div>
            <img data-src="//neemans.com/cdn/shop/files/Relive_knit_loafers_homepage_grid_6.jpg?v=1688997950"
                loading="lazy" alt="" width="548" height="540" class="gallery-img lazy"
                src="images/Newfolder/hotel-facade.jpg">
        </div>
        <div class="grid-block block-num-3 gallery-img-block">
            <div class="gallery-overlay"></div>
            <img data-src="//neemans.com/cdn/shop/files/Homepage_Grid_Eco_flips.jpg?v=1690567236" loading="lazy" alt=""
                width="548" height="450" class="gallery-img lazy" src="images/Newfolder/Privilon-3-1024x576.webp">
        </div>

        <div class="grid-block block-num-4 gallery-text-block">
            <h2 class="content-heading">Ahemedabad is a locale that turns moments into stories</h2>
            <p class="content-para">Step into our locality, an evolving gem in Ahmedabad known for its well-planned infrastructure and modern conveniences. Experience the perfect fusion of urban vitality and strong community, enhancing your way of life.
<br>
#Dekhoge To Janoge</p>
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




    <!-- Fullwidth Section -->
    <section class="fullwidth" data-background-color="#fbfbfb" style="padding-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                        <h3 class="headline"><span>We make your property work for you</span> We work hard to ensure your
                            investment is always making money.</h3>
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
                    <div class="style_title__QI9x8">With real Estate</div>
                    <div class="style_title__QI9x8">Other Listing Portals</div>
                    <div class="style_title__QI9x8 style_hiddenXs___KSol">Real-estate Agents</div>
                </div>
                <div class="style_plansWrapper__bHAEU">
                    <ul class="style_listUl__UaC44">
                        <li class="style_listTitle__b03Z6 style_listLi__P4U9C">Renting Price Guidance</li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                        <li class="style_listLi__P4U9C style_hiddenXs___KSol ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                    </ul>
                    <ul class="style_listUl__UaC44">
                        <li class="style_listTitle__b03Z6 style_listLi__P4U9C">Online Marketing on own website</li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C style_hiddenXs___KSol ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                    </ul>
                    <ul class="style_listUl__UaC44">
                        <li class="style_listTitle__b03Z6 style_listLi__P4U9C">Online Marketing on multiple websites
                        </li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                        <li class="style_listLi__P4U9C style_hiddenXs___KSol ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                    </ul>
                    <ul class="style_listUl__UaC44">
                        <li class="style_listTitle__b03Z6 style_listLi__P4U9C">Offline Marketing in &amp; around the
                            house</li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                        <li class="style_listLi__P4U9C style_hiddenXs___KSol ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                    </ul>
                    <ul class="style_listUl__UaC44">
                        <li class="style_listTitle__b03Z6 style_listLi__P4U9C">Physical House Visits for Tenants</li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                        <li class="style_listLi__P4U9C style_hiddenXs___KSol ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                    </ul>
                    <ul class="style_listUl__UaC44">
                        <li class="style_listTitle__b03Z6 style_listLi__P4U9C">Virtual House Tours for Tenants</li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C style_hiddenXs___KSol ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                    </ul>
                    <ul class="style_listUl__UaC44">
                        <li class="style_listTitle__b03Z6 style_listLi__P4U9C">Tenant Background Verification</li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                        <li class="style_listLi__P4U9C style_hiddenXs___KSol ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                    </ul>
                    <ul class="style_listUl__UaC44">
                        <li class="style_listTitle__b03Z6 style_listLi__P4U9C">Rent Agreement &amp; Paperwork</li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                        <li class="style_listLi__P4U9C style_hiddenXs___KSol ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                    </ul>
                  
                    <ul class="style_listUl__UaC44">
                        <li class="style_listTitle__b03Z6 style_listLi__P4U9C">Move-in &amp; Move-out Video Reports</li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                        <li class="style_listLi__P4U9C style_hiddenXs___KSol ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                    </ul>
                    <ul class="style_listUl__UaC44">
                        <li class="style_listTitle__b03Z6 style_listLi__P4U9C">Property Maintenance &amp; Repairs</li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                        <li class="style_listLi__P4U9C style_hiddenXs___KSol ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                    </ul>
                    <ul class="style_listUl__UaC44">
                        <li class="style_listTitle__b03Z6 style_listLi__P4U9C">Dedicated Relationship Manager</li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                        <li class="style_listLi__P4U9C  ">
                            <div class="style_iconBgCross__E8kyd" style="background-color:#142b6f"><img
                                    class="style_cross__ITFhg"
                                    src="./images/226-2260721_transparent-white-x-png-png-download-removebg-preview.png"
                                    alt="Cross" width="10" height="10"></div>
                        </li>
                        <li class="style_listLi__P4U9C style_hiddenXs___KSol ">
                            <div class="style_iconBg__RwiOg" style="background-color:#f2612a;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.357 342.357" fill="#fff"
                                    width="12" height="12">
                                    <polygon
                                        points="290.04,33.286 118.861,204.427 52.32,137.907 0,190.226 118.862,309.071 342.357,85.606">
                                    </polygon>
                                </svg></div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>









    <!-- Fullwidth Section -->
    <section class="fullwidth" data-background-color="#fbfbfb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                        <h3 class="headline"><span>What are you looking for?</span>  Properties Accessible In Most Embracing Places
                        </h3>
                        <div class="utf-headline-display-inner-item">What are you looking for?</div>
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

    <!-- <section class="fullwidth margin-bottom-0 padding-top-60 padding-bottom-0" data-background-color="#ffffff">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="utf-section-headline-item centered margin-bottom-30 margin-top-10">
            <h3 class="headline"><span>Popular Companies</span> Our Best Partners</h3>
            <div class="utf-headline-display-inner-item">Popular Companies</div>
            <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum
              been industry standard dummy text ever since when unknown printer took a galley.</p>
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="utf-logo-carousel-item dot-navigation">
            <div class="item"><a href="#"><img src="images/brand_logo_01.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="images/brand_logo_02.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="images/brand_logo_03.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="images/brand_logo_04.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="images/brand_logo_05.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="images/brand_logo_06.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="images/brand_logo_07.png" alt=""></a></div>
          </div>
        </div>
        
      </div>
    </div>
  </section> -->

   
    <?php include("footer.php");?>