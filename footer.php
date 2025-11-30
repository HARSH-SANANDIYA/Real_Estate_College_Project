  
<!-- Footer -->
    <div class="margin-top-65"></div>
    <div id="footer"> 
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12"> 
            <a href="index.php"><img class="footer-logo" src="images/logo.jpg" alt=""></a>
            <p>Real Estate is your gateway to discovering the ideal rental space in the vibrant locales.We provide personalized assistance, local insights, and a seamless experience whether you're searching for a home, office, shop, or showroom.</p>     
            <div class="widget  ">
              <ul class="utf-social-icons rounded">
                <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
              </ul>
               <div class="clearfix"></div>
            </div>             
          </div>
          <div class="col-md-2 col-sm-3 col-xs-6">
            <h4>Useful Links</h4>
            <ul class="utf-footer-links-item">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="property.php">Property</a></li>
              <li><a href="add-new-property.php#create-property">Add Property</a></li> 
  
              <li><a href="blog.php">Blog</a></li>
            </ul>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-6">
            <h4>Our Area</h4>
            <ul class="utf-footer-links-item">
              <?php

// $query='SELECT p.location from properties p left join commerical c on p.location=c.location union SELECT c.location from properties p right join commerical c on p.location=c.location limit 6';
$query="SELECT `name` from `location` ORDER BY `name` ASC limit 6";
$execute=mysqli_query($con,$query);
while($fetch=mysqli_fetch_array($execute))
{?>
              <li><a><?php echo $fetch['name']?></a></li><?php
}
?>

<?php
              include("connection.php");
                $query='SELECT * FROM about';
                $execute=mysqli_query($con,$query);
                $fetch=mysqli_fetch_array($execute)
              ?>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Office Address</h4>
            <!-- <div class="utf-contact-location-info-aera sidebar-textbox margin-bottom-40"> -->
            <ul class="contact-details " style="list-style: none">
              <li><i class="icon-feather-smartphone"></i> <strong>Phone Number:</strong> <span><?php echo $fetch['phone']?></span></li>
              <li><i class="icon-material-outline-email"></i> <strong>Email Address:</strong> <span><a href="#"><?php echo $fetch['email']?></a></span></li>
              
              <li><i class="icon-feather-map-pin"></i> <strong>Address:</strong> <span><?php echo $fetch['address']?></span></li>            
            </ul>
          </div>
        </div>
      </div>
          
          
      
      <div class="row" style="width: 100%;">
        <div class="col-md-12">
          <div class="copyrights">© 2024 <a href="index.php">Real estate</a> All Rights Reserved, Designed by Our team</a></div>
        </div>
      </div>
    </div>
<!-- Footer -->

 


           <div id="backtotop"><a href="#"></a></div>
</div>  
<!-- Wrapper / End -->


  
<!-- Scripts --> 
<script src="scripts/jquery-3.3.1.min.js"></script> 
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/chosen.min.js"></script> 
<script src="scripts/magnific-popup.min.js"></script> 
<script src="scripts/owl.carousel.min.js"></script> 
<script src="scripts/rangeSlider.js"></script> 
<script src="scripts/sticky-kit.min.js"></script> 
<script src="scripts/slick.min.js"></script> 
<script src="scripts/masonry.min.js"></script> 
<script src="scripts/mmenu.min.js"></script> 
<script src="scripts/tooltips.min.js"></script> 
<script src="scripts/custom_jquery.js"></script> 

<!-- Maps --> 
<script src="https://maps.googleapis.com/maps/api/js?key=&amp;libraries=places"></script>
<script src="scripts/infobox.min.js"></script> 
<script src="scripts/markerclusterer.js"></script> 
<script src="scripts/maps.js"></script> 
</body>

<!-- Mirrored from utouchdesign.com/themes/realfun/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 13:49:05 GMT -->
</html>