<?php
    $id=$_GET['id'];
    include("../connection.php");
    $query="DELETE FROM `contact` WHERE id='$id'";
    echo $query;
    $execute=mysqli_query($con,$query);
    if($execute)
    {
        header("location:contactus.php");
    }
?>