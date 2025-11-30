<?php
    $id=$_GET['id'];
    include("../connection.php");
    $query="DELETE FROM `blog` WHERE id='$id'";
    $execute=mysqli_query($con,$query);
    if($execute)
    {
        header("location:blogs.php");
    }
?>