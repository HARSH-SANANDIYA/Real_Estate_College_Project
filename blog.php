<?php
include("header.php");
?>
    <div class="clearfix"></div>

    <!-- Titlebar -->
    <div class="parallax titlebar" data-background="images/popular-location-06.jpg" data-color="rgba(48, 48, 48, 1)"
      data-color-opacity="0.8" data-img-width="800" data-img-height="505">
      <div id="titlebar">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Blog</h2>
              <!-- Breadcrumbs -->
              <nav id="breadcrumbs">
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li>Blog</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Content -->
    <div class="container">
      <div class="blog-page">
        <div class="row">
        <?php
              include("connection.php");
                $query='SELECT * FROM blog';
                $execute=mysqli_query($con,$query);
                while($fetch=mysqli_fetch_array($execute))
                {
              ?>
          <div class="col-md-4">
            <div class="blog-post">
              <a href="blog_detail.php?id=<?php echo $fetch['id'];?>" class="post-img"> <img src="<?php echo $fetch['image']?>" alt=""> </a>
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
       


          <!-- Pagination -->
          <!-- <div class="clearfix"></div>
          <div class="utf-pagination-container">
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
          <div class="clearfix"></div>
        </div>
        <!-- Blog Posts / End -->
      </div>
      <!-- Sidebar / End -->
    </div>
  </div>

  <?php include("footer.php");?>