
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include("connection.php");?>
<!-- Mirrored from utouchdesign.com/themes/realfun/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 13:41:04 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="theme-color" content="#e33324">
    <meta name="description" content="">
    <meta name="keywords"
        content="Apartment, Estate Agency, Housing, Real Estate, Real Estate Broker, Real Estate Property, Single Property">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>real estate</title>

    <!--  Favicon -->
    <link rel="shortcut icon" href="images/logo.jpg">

    <!-- CSS -->
    <link rel="stylesheet" href="css/stylesheet.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
         .dropdown-list {
            display: none;
            position: absolute;
            top: 61px;
            right: -30px;
            background-color: #f9f9f9;
            min-width: 130px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
          
        }

        /* Style the dropdown list items */
        .dropdown-list a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown list items on hover */
        .dropdown-list a:hover {
            background-color: #f1f1f1;
        }
        .duser{
            color: green;
            font-weight: bold;
        }
    </style>

</head>

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


        <!-- Header Container -->
        <header id="header-container" class="fullwidth">
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="left-side">
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button"> <span class="hamburger-box">
                                    <span class="hamburger-inner"></span> </span> </button>
                        </div>
                        <div id="logo" style="width:200px;"><a href="index.php"><img src="images/logo.jpg" alt=""></a></div>

                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a class="current" href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="#">Property</a>
                                    <ul>
                                        <li><a href="property.php">Residential</a></li>
                                        <li><a href="Commerical-property.php">Commerical</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="testimonial.php">Testimonial</a></li> -->
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                
                                <li><a href="blog.php">Blog</a></li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                    </div>
                    <div>
                        <div class="header-widget">
                            <a href="contact.php" class=" log-in-button sign-in"><i
                                    class="icon-feather-phone-call"></i>
                                <span>Contact</span></a>
                            <a href="./add-new-property.php#create-property"  class="button border"><i
                                    class="icon-feather-plus-circle"></i>
                                <span>List Property <span class="Free">FREE</span> </span></a>
                            <a href="register.php" class=" log-in-button sign-in"><span>Register</span></a>
                            <a href="login.php" class=" log-in-button sign-in"><span>Login</span></a>
                            <a onclick="toggleDropdown()" class=" log-in-button sign-in"><span><i class="fa-solid fa-user"></i></span></a> 
                                <div id="myDropdown" class="dropdown-list">
                                    <!-- <a href="profile.php">Profile</a> -->
                                    <?php if(isset($_SESSION['email'])) : ?>
                                        <a href="profile.php">Profile</a>
                                    <?php else : ?>
                                        <a href="login.php">login</a>
                                    <?php endif; ?>   
                                </div>
                                
                        </div>
                        
                    </div>
                </div>
            </div>
        </header>
    <div>
    <script>
<?php
?>
    function toggleDropdown() {
            var dropdown = document.getElementById("myDropdown");
            if (dropdown.style.display === "none") {
                dropdown.style.display = "block";
            } else {
                dropdown.style.display = "none";
            }
        }
        </script>
</body>