<?php include("header.php"); ?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List of Properties</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="overflow-x:auto;width:100%">
                            <table id="properties_list_form" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM list_properties ORDER BY id DESC";
                                    $execute = mysqli_query($con, $query);
                                    $i = 1;
                                    while ($fetch = mysqli_fetch_array($execute)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $fetch['name']; ?></td>
                                            <td><?php echo $fetch['phone_number']; ?></td>
                                        </tr>
                                    <?php
                                    $i++;}
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script>
    $.noConflict();
    jQuery(document).ready(function($) {
        $('#properties_list_form').DataTable();
    });
</script>