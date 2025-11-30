<?php
include("header.php");
?>
  <div class="clearfix"></div>
  
  <!-- Titlebar -->
  <div class="parallax titlebar" data-background="images/popular-location-08.jpg" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
    <div id="titlebar">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Contact Us</h2>
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Container / Start -->
  <div class="container">
    <div class="row">  
	  <div class="col-md-12">
        <div class="utf-contact-map margin-bottom-50">
          <!--  google map start-->
              <div>   
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29374.883888375207!2d72.44630411596334!3d23.028894212734336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b98caee7edf%3A0x4d638447ee504496!2sBopal%2C%20Ahmedabad%2C%20Gujarat%20380058!5e0!3m2!1sen!2sin!4v1711523446907!5m2!1sen!2sin" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div> 
           <!--  google map end-->
			  <div id="propertyMap" data-latitude="48.8566" data-longitude="2.3522" data-map-icon="im im-icon-Hamburger"></div>
			  
		  </div>
        </div>
      </div>	
      <!-- Contact Details -->
      <div class="col-md-4">
        <div class="utf-boxed-list-headline-item">
            <h3><i class="icon-feather-map"></i> Office Address</h3>
        </div>
        <?php
              include("connection.php");
                $query='SELECT * FROM about';
                $execute=mysqli_query($con,$query);
                $fetch=mysqli_fetch_array($execute)
              ?>
        <!-- Contact Details -->
        <div class="utf-contact-location-info-aera sidebar-textbox margin-bottom-40">
          <ul class="contact-details">
            <li><i class="icon-feather-smartphone"></i> <strong>Phone Number:</strong> <span><?php echo $fetch['phone'];?></span></li>
            <li><i class="icon-material-outline-email"></i> <strong>Email Address:</strong> <span><a href="#"><?php echo $fetch['email'];?></a></span></li>
			
			<li><i class="icon-feather-map-pin"></i> <strong>Address:</strong> <span><?php echo $fetch['address'];?></span></li>            
          </ul>
        </div>
      </div>
      
      <!-- Contact Form -->
      <div class="col-md-8">
        <section id="contact">
		  <div class="utf-boxed-list-headline-item">
            <h3><i class="icon-feather-layers"></i> Contact Form</h3>
          </div>
		  <div class="utf-contact-form-item">
			  <form method="POST" action=''>
				<div class="row">
				  <div class="col-md-6">
					  <input name="fname" type="text" placeholder="Frist Name" required />                
				  </div>
				  <div class="col-md-6">
					  <input name="lname" type="text" placeholder="Last Name" required />                
				  </div>
				  <div class="col-md-6">
					  <input name="email" type="email" placeholder="Email Address" required />                
				  </div>
				  <div class="col-md-6">
					  <input name="contact" type="tel" placeholder="Mobile No." required pattern="[0-9]{10}" />                
				  </div>
				  <div class="col-md-12">
					  <textarea name="message" cols="40" rows="3" placeholder="Message..." spellcheck="true" required></textarea>
				  </div>
				</div>
				<div class="utf-centered-button margin-bottom-10">	
					<input type="submit" name="submit" class="submit button" id="submit" value="Submit Message" />
				</div>
			  </form>
        
    <?php
                                    if(isset($_POST['submit']))
                                    {
                                      $fname=$_POST['fname'];
                                      $lname=$_POST['lname'];
                                      $email=$_POST['email'];
                                      $contact=$_POST['contact'];
                                      $message=$_POST['message'];
                                      $query="INSERT INTO `contact`(`fname`, `lname`, `email`, `contact`, `address`) VALUES ('$fname','$lname','$email','$contact','$message')";
                                      $execute=mysqli_query($con,$query);
                                      if($execute)
                                      {
                                        echo "<script>alert('Success')</script>";
                                      }
                                    }
                                    ?>
		    </div>	  
        </section>
      </div>
      <!-- Contact Form / End -->       
    </div>
  </div>
  <!-- Container / End --> 
<?php
include("footer.php")
?>