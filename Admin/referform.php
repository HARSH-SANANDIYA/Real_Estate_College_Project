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
    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Refer Form</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="overflow-x:auto;width:100%">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Message</th>
                      <th>Address</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                      $query="SELECT * FROM referform";
                      $execute=mysqli_query($con,$query);
                      while($fetch=mysqli_fetch_array($execute))
                      {
                      ?>
                    <tr>
                      <td><?php echo $fetch['id'];?></td>
                      <td><?php echo $fetch['friendname'];?></td>
                      <td><?php echo $fetch['friendcontact'];?></td>
                      <td><?php echo $fetch['friendlocation'];?></td>
                      <td><?php echo $fetch['name'];?></td>
                      <td><?php echo $fetch['email'];?></td>
                      <td><?php echo $fetch['contact'];?></td>
                      <td><a href="delete_referform.php?id=<?php echo $fetch['id'];?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                      }
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
 