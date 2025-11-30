<?php include("header.php");?>
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
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Blogs</h3>
              </div>
              <form method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Blog Name" name="title" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter Blog Date" name="date" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Short Description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Blog Short Description" name="details" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Author</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Author" name="author" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Description 1</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Blog Description 1" name="description1" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Description 2</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Blog Description 2" name="description2" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Description 3</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Blog Description 3" name="description3" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Add Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="profile-img" name="image1" accept="image/png,image/jpg,image/jpeg" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>


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
    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Blogs</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="overflow-x:auto;width:100%">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Blog Title</th>
                      <th>Short Description</th>
                      <th>Author</th>
                      <th>Date</th>
                      <th>Description 1</th>
                      <th>Description 2</th>
                      <th>Description 3</th>
                      <th>Image</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                      $query="SELECT * FROM blog ORDER BY id DESC";
                      $execute=mysqli_query($con,$query);
                      $i = 1;
                      while($fetch=mysqli_fetch_array($execute))
                      {
                      ?>
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $fetch['title'];?></td>
                      <td><?php echo substr($fetch['details'],0,20)."..."; ?> </td>
                      <td><?php echo $fetch['name'];?></td>
                      <td><?php echo $fetch['date'];?></td>
                      <td><?php echo substr($fetch['description1'],0,20)."...";?></td>
                      <td><?php echo substr($fetch['description2'],0,20)."...";?></td>
                      <td><?php echo substr($fetch['description3'],0,20)."...";?></td>
                      <td><img src='../<?php echo $fetch['image'];?>' style='width:100%'></td>
                      <td><a href="delete_blogs.php?id=<?php echo $fetch['id'];?>" class="btn btn-danger">Delete</a>&nbsp;&nbsp;<a href="update_blogs.php?id=<?php echo $fetch['id'];?>" class="btn btn-success">Edit</a></td>
                    </tr>
                    <?php
                      $i++;}
                      ?>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
</div> 
</div>


 <?php include("footer.php");?>
 <?php
  if(isset($_POST['submit']))
  {
    $title=$_POST['title'];
    $date=$_POST['date'];
    $description1=$_POST['description1'];
    $description2=$_POST['description2'];
    $description3=$_POST['description3'];
    $details=$_POST['details'];
    $author=$_POST['author'];

    $image1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
		$image_name = addslashes($_FILES['image1']['name']);
		move_uploaded_file($_FILES["image1"]["tmp_name"],"../images/blog/" . $_FILES["image1"]["name"]);
		$image1="images/blog/" . $_FILES["image1"]["name"];

    echo $image1;
    $sql="INSERT INTO `blog`( `title`, `name`, `date`, `details`, `image`, `description1`, `description2`, `description3`) VALUES ('$title','$author','$date','$details','$image1','$description1','$description2','$description3')";
    $execute=mysqli_query($con,$sql);
    if($execute)
    {
      echo "<script>window.location.href='blogs.php'</script>";
    }
  }

 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script>
	$.noConflict();
	jQuery(document).ready(function($) {
		$('#example2').DataTable();
	});
</script>