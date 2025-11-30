<?php include("header.php");
$con=mysqli_connect('localhost','root','','bopal');
// $con=mysqli_connect('localhost','root','','bopallocal');
$query="SELECT *  FROM `adbanner`";
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
                <h3 class="card-title">Banner Information</h3>
              </div>
              <form method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Link</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Content" name="link" ><?php echo $fetch['link'];?></textarea>
                  </div>
                  <label for="exampleInputFile">Add Image 1</label>


<div class="input-group">
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="profile-img" name="image"
            accept="image/png,image/jpg,image/jpeg">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<style>
    #myDiv {
        border: 2px solid lightgray;
        height: 210px;
        width: 210px;
        float: left;
    }
</style>
<img src="../<?php echo $fetch['image']; ?>" id="profile-img-tag" alt="Profile Pic"
    width="200px" height="200px"
    style="border:5px solid #ffffff; background-color: #ffffff;" />
</div>
</div>
<script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
    $('#profile-img-tag').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}
$("#profile-img").change(function () {
readURL(this);
});
</script>
                
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
    if($_FILES["image"]["name"] != "")
    {
      $link=$_POST['link'];
      $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
      $image_name = addslashes($_FILES['image']['name']);
      move_uploaded_file($_FILES["image"]["tmp_name"],"../images/adbanner/" . $_FILES["image"]["name"]);
      $image="images/adbanner/" . $_FILES["image"]["name"];

    $sql="UPDATE `adbanner` SET `link`='$link',`image`='$image'";
    $execute=mysqli_query($con,$sql);
    if($execute)
    {
        echo "<script>window.location.href='adbanner.php'</script>";
    }
  }
  else
  {
    $link=$_POST['link'];

    $sql="UPDATE `adbanner` SET `link`='$link'";
    $execute=mysqli_query($con,$sql);
    if($execute)
    {
        echo "<script>window.location.href='adbanner.php'</script>";
    }
  }
  }
 ?>