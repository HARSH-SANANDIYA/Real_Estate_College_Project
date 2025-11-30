<?php
include("header.php");
$id=$_GET['id'];
?>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    <!-- Titlebar -->
    <div class="parallax titlebar" data-background="images/popular-location-07.jpg" data-color="rgba(48, 48, 48, 1)"
      data-color-opacity="0.8" data-img-width="800" data-img-height="505">
      <div id="titlebar">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Blog Details </h2>
              <!-- Breadcrumbs -->
              <nav id="breadcrumbs">
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li>Blog Details </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="container">
      <!-- Blog Posts -->
      <div class="blog-page">
        <div class="row">
          <!-- Sidebar -->
          <div class="col-md-4 order-lg-first">
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
                  <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                  <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <!-- Widget / End-->
              <div class="clearfix"></div>
              <div class="margin-bottom-40"></div>
            </div>
          </div>
          <?php
include("connection.php");
$id=$_GET['id'];
$query="Select * from blog where id='$id'";
$execute=mysqli_query($con,$query);
$fetch=mysqli_fetch_array($execute);
?>
          <div class="col-md-8">
            <div class="blog-post single-post">
              <img class="post-img" src="images/blog-post-02.jpg" alt="">
              <div class="utf-post-content-area">
                <h3>The Best (and Worst) Canadian Merchant Account Providers.</h3>
                <ul class="post-meta">
                  <li><?php echo $fetch['name'];?></li>
                  <li><?php echo $fetch['date'];?></li>
                </ul>
                <p><?php echo $fetch['description1'];?></p>
                <div class="post-quote">
                  <blockquote><?php echo $fetch['description2'];?></blockquote>
                </div>
                <p><?php echo $fetch['description3'];?></p>

                <!-- Share Buttons -->
                <!-- <div class="utf-detail-social-sharing margin-top-25">
                  <span><strong>Social Sharing:-</strong></span>
                  <ul>
                    <li><a href="#" class="tooltip top" title="Facebook"><i class="icon-brand-facebook-f"></i></a></li>
                    <li><a href="#" class="tooltip top" title="Twitter"><i class="icon-brand-twitter"></i></a></li>
                    <li><a href="#" class="tooltip top" title="Linkedin"><i class="icon-brand-linkedin-in"></i></a></li>
                    <li><a href="#" class="tooltip top" title="Google Plus"><i class="icon-brand-google"></i></a></li>
                    <li><a href="#" class="tooltip top" title="Whatsapp"><i class="icon-brand-whatsapp"></i></a></li>
                    <li><a href="#" class="tooltip top" title="Pinterest"><i class="icon-brand-pinterest-p"></i></a>
                    </li>
                  </ul>
                </div> -->
                <div class="clearfix"></div>
              </div>
            </div>
            <!-- Blog Post / End -->

            <!-- Post Navigation -->
            <!-- <ul id="posts-nav" class="margin-top-0 margin-bottom-0">
              <li class="next-post"> <a href="#"><span>Next Post <i class="fa fa-angle-right"></i></span> <strong>The
                    Best Canadian Merchant Account Providers.</strong></a> </li>
              <li class="prev-post"> <a href="#"><span><i class="fa fa-angle-left"></i> Previous Post</span> <strong>How
                    to “Woo” a Recruiter and Land Your Dream Job.</strong></a> </li>
            </ul> -->

            <!-- Related Posts -->
            <div class="utf-inner-blog-section-title">
              <h4><i class="icon-brand-bimobject"></i> Recent Blog Posts</h4>
            </div>
            <div class="row">   <?php
              include("connection.php");
                $query="SELECT * FROM blog where id<>$id order by id desc limit 2";
                $execute=mysqli_query($con,$query);
                while($fetch=mysqli_fetch_array($execute))
                {
              ?>
              <div class="col-md-6">
                <div class="blog-post">
                  <a href="blog_detail.php?id=<?php echo $fetch['id'];?>" class="post-img"> <img src="<?php echo $fetch['image']?>" alt="">
                  </a>
                  <div class="utf-post-content-area">
                    <h3><a href="blog_detail.php?id=<?php echo $fetch['id'];?>"><?php echo $fetch['title']?></a></h3>
                    <ul class="utf-blog-item-post-list">
                    <li><?php echo $fetch['name']?></li>
                  <li><?php echo $fetch['date']?></li>
                    </ul>
                    <p><?php echo $fetch['details']?></p>
                  </div>
                </div>
              </div>
<?php
                }
                ?>
            </div>
            <!-- Related Posts / End -->
          </div>
          <!-- Content / End -->
        </div>
      </div>
    </div>
<?php include("footer.php");?>