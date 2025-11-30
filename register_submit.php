<?php 
include("connection.php");
?>

<?php
    if(isset($_POST['submit'])) {


    
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $usertype = $_POST['usertype'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conformpassword = $_POST['conformpassword'];
       
        

        $query1 = "SELECT * FROM login WHERE email = '$email'";
        $execute1 = mysqli_query($con, $query1);
        

        if(mysqli_num_rows($execute1) > 0) {
            echo "<script>alert('Email already exists');</script>";
        }else{
            $data = "INSERT INTO `login` (`firstname`,`lastname`,`usertype`,`email`,`password`,`conformpassword`) VALUES('$firstname','$lastname','$usertype','$email','$password','$conformpassword')";  
            $query = mysqli_query($con,$data);
            if($query){
                //echo "insert success";
                echo "<script>window.location.href='login.php';</script>";
            } 
            else{
                 echo "<script>alert('not submitted');</script>";
            }
        }
        
    }
?>