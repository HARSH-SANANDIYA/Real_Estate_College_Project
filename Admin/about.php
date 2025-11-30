<?php include("header.php");
$con=mysqli_connect('localhost','root','','bopal');
$query="SELECT *  FROM `about`";
$execute=mysqli_query($con,$query);
$fetch=mysqli_fetch_array($execute);?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Information</h3>
              </div>
              <form method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">About 1</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Content" name="about1" ><?php echo $fetch['about1'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">About 2</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Content" name="about2" ><?php echo $fetch['about2'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">About 3</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Content" name="about3" ><?php echo $fetch['about3'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Point 1</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Content" name="point1" ><?php echo $fetch['point1'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Point 2</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Content" name="point2" ><?php echo $fetch['point2'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Point 3</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Content" name="point3" ><?php echo $fetch['point3'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Point 4</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Content" name="point4" ><?php echo $fetch['point4'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Point 5</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Content" name="point5" ><?php echo $fetch['point5'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contact</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Content" name="phone" ><?php echo $fetch['phone'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Content" name="email" ><?php echo $fetch['email'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Content" name="address" ><?php echo $fetch['address'];?></textarea>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
            </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
</div> 
</div>


 <?php include("footer.php");?>
 <?php
  if(isset($_POST['submit']))
  {
    $about1=$_POST['about1'];
    $about2=$_POST['about2'];
    $about3=$_POST['about3'];
    $point1=$_POST['point1'];
    $point2=$_POST['point2'];
    $point3=$_POST['point3'];
    $point4=$_POST['point4'];
    $point5=$_POST['point5'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $sql="UPDATE `about` SET `about1`='$about1',`about2`='$about2',`about3`='$about3',`point1`='$point1',`point2`='$point2',`point3`='$point3',`point4`='$point4',`point5`='$point5',`phone`='$phone',`email`='$email',`address`='$address'";
    $execute=mysqli_query($con,$sql);
    if($execute)
    {
      echo "<script>alert('Success');window.location.href='about.php'</script>";
    }
  }

 ?>