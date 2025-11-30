<?php
    $id=$_GET['id'];
    include("connection.php");
    $query="DELETE properties, properties_details FROM properties INNER JOIN properties_details
    WHERE properties.id=properties_details.property_id AND properties.id=$id";
    echo $query;
    $execute=mysqli_query($con,$query);
    if($execute)
    {
        header("location:user_profile_residential.php");
    }
?>