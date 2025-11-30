<?php include("header.php");
$id=$_GET['id'];
$query="SELECT *  FROM `blog` WHERE `id`='$id'";
$execute=mysqli_query($con,$query);
$fetch=mysqli_fetch_array($execute);
?>
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
                <h3 class="card-title">Career</h3>
              </div>
              <form method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Blog Name" name="title" value="<?php echo $fetch['title']?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Date</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Blog Date" name="date" value="<?php echo $fetch['date']?>"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Short Description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Blog Short Description" name="details" value="<?php echo $fetch['details']?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Author</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Author" name="author" value="<?php echo $fetch['name']?>" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Description 1</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Blog Description 1" name="description1" value="<?php echo $fetch['description1']?>"  ><?php echo $fetch['description1']?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Description 2</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Blog Description 2" name="description2" value="<?php echo $fetch['description2']?>"  ><?php echo $fetch['description2']?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Description 3</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Blog Description 3" name="description3" value="<?php echo $fetch['description3']?>"  ><?php echo $fetch['description3']?></textarea>
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
      $title=$_POST['title'];
      $date=$_POST['date'];
      $description1=$_POST['description1'];
      $description2=$_POST['description2'];
      $description3=$_POST['description3'];
      $details=$_POST['details'];
      $name=$_POST['author'];

    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    move_uploaded_file($_FILES["image"]["tmp_name"],"../images/blog/" . $_FILES["image"]["name"]);
    $image="images/blog/" . $_FILES["image"]["name"];

    $sql="UPDATE `blog` SET `title`='$title',`name`='$name',`date`='$date',`details`='$details',`image`='$image',`description1`='$description1',`description2`='$description2',`description3`='$description3' WHERE `id`='$id'";
    $execute=mysqli_query($con,$sql);
    if($execute)
    {
        echo "<script>window.location.href='blogs.php'</script>";
    }
  }
  else
  {
    $title=$_POST['title'];
    $date=$_POST['date'];
    $description1=$_POST['description1'];
    $description2=$_POST['description2'];
    $description3=$_POST['description3'];
    $details=$_POST['details'];
    $author=$_POST['author'];

    $sql="UPDATE `blog` SET `title`='$title',`name`='$author',`date`='$date',`details`='$details',`description1`='$description1',`description2`='$description2',`description3`='$description3' WHERE `id`='$id'";
    $execute=mysqli_query($con,$sql);
    if($execute)
    {
        echo "<script>window.location.href='blogs.php'</script>";
    }
  }
  }
 ?>