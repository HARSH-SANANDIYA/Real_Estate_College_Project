<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/realfun/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 13:41:04 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="theme-color" content="#e33324">
    <meta name="description" content="">
    <meta name="keywords"
        content="Apartment, Estate Agency, Housing, Real Estate, Real Estate Broker, Real Estate Property, Single Property">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>

    <!--  Favicon -->
    <link rel="shortcut icon" href="images/logo.jpg">

    <!-- CSS -->
    <link rel="stylesheet" href="css/stylesheet.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<style>
    #utf-signin-dialog-block > div{
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.12);
	    border: 6px solid rgba(0, 0, 0, 0.1);
    }
    .log-in-text{
        background-color: #f2612a; 
        color: #fff; 
        list-style: none; 
        font-size: 22px;  
        font-weight: bold; 
        text-align: center; 
        padding: 20px;
        margin-top: 0px;
    }
    @media only screen and (max-width: 500px) {
        .utf-welcome-text-item > img{
            width: 35%;
            margin-top: -20px;
        }
	}
    .a{
        color: green;
        font-weight: bold;
    }
    .div{
        text-align: right;
        margin-top: 30px;
    }
</style>

<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="utf-preloader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Sign In Popup -->
        <div id="utf-signin-dialog-block">
            <div>
                <ul class="log-in-text">
                    <li><a href="#login">Log In</a></li>
                </ul>
                <div class="utf-popup-container-part-tabs">
                    <!-- Login -->
                    <div class="utf-popup-tab-content-item" id="login">
                        <div class="utf-welcome-text-item">
                            <img src="./images/logo.jpg" width="25%" alt="" style="margin-bottom: 20px;">
                            <h3>Welcome!</h3>
                        </div>
                        <form method="post" id="login-form">
                            <div class="utf-no-border">
                                <input type="text" name="email" id="emailaddress" placeholder="Email Address" required />
                            </div>
                            <div class="utf-no-border">
                                <input type="password" name="password" id="password" placeholder="Password" required />
                            </div>
                            </form>
                            <input type="submit" class="button full-width utf-button-sliding-icon ripple-effect" name="submit" value="submit" form="login-form">
                            <div class="div">
                            <p style="color: black;">Need an account? <a class="a" href="register.php">Sign up</a></p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In Popup / End -->


    </div>

</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        include('connection.php');
        $email=$_POST['email'];
        $password=$_POST['password'];
 
            
        $sql="SELECT * FROM `login` WHERE email='$email' ";
        $execute = mysqli_query($con,$sql);
        $fetch = mysqli_fetch_array($execute);
        $password1 = $fetch['password'];
        $email1 = $fetch['email'];
        $usertype = $fetch['usertype'];
        echo $sql;
        if($email==$email1 && $password==$password1 && $usertype == 'a')
        {
            $_SESSION["email"] = $email;
            echo  $_SESSION["email"];
            echo "<script>window.location.href='Admin/about.php'</script>";
        }
        else if($email==$email1 && $password==$password1 && $usertype == 'u')
        {
            $_SESSION["email"] = $email;
            echo  $_SESSION["email"];
            echo "<script>window.location.href='index.php'</script>";
        }
        else
        {
            echo "<script>alert('Wrong Password');window.location.href='login.php'</script>";
        }
    }
?>

<script>

</script>

<!-- Scripts -->
<script src="scripts/jquery-3.3.1.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/chosen.min.js"></script>
<script src="scripts/magnific-popup.min.js"></script>
<script src="scripts/owl.carousel.min.js"></script>
<script src="scripts/rangeSlider.js"></script>
<script src="scripts/sticky-kit.min.js"></script>
<script src="scripts/slick.min.js"></script>
<script src="scripts/masonry.min.js"></script>
<script src="scripts/mmenu.min.js"></script>
<script src="scripts/tooltips.min.js"></script>
<script src="scripts/typed.js"></script>
<script src="scripts/custom_jquery.js"></script>

