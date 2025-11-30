<?php
    $id=$_GET['id'];
    include("../connection.php");
    $query="DELETE commerical, commerical_details FROM commerical INNER JOIN commerical_details
    WHERE commerical.id=commerical_details.property_id AND commerical.id=$id";
    echo $query;
    $execute=mysqli_query($con,$query);
    if($execute)
    {
        header("location:usercommerical.php");
    }
?>