
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

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>

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
    .error{
        color: red;
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
                    <li><a href="#">Register Now!!</a></li>
                </ul>
                <div class="utf-popup-container-part-tabs">
                    <!-- register -->
                    <div class="utf-popup-tab-content-item" id="register">
                        <div class="utf-welcome-text-item">
                            <img src="./images/logo.jpg" width="25%" alt="" style="margin-bottom: 20px;">
                            <h3>Welcome!</h3>
                        </div>
                        <form method="post" id="register_form" action="register_submit.php">
                            <div class="utf-no-border">
                                <input type="text" name="firstname" id="firstname" placeholder="First Name" />
                            </div>
                            <div class="utf-no-border">
                                <input type="text" name="lastname" id="lastname" placeholder="Last Name" />
                            </div>
                            <div class="utf-no-border">
                                <input type="hidden" name="usertype" id="usertype" value="u" />
                            </div>
                            <div class="utf-no-border">
                                <input type="text" name="email" id="email" placeholder="Email Address" />
                            </div>
                            <div class="utf-no-border">
                                <input type="password" name="password" id="password" placeholder="Password" />
                            </div>
                            <div class="utf-no-border">
                                <input type="password" name="conformpassword" id="conformpassword" placeholder="Conform Password" />
                            </div>
                        </form>
                            <input type="submit" id="submit"  class="button full-width utf-button-sliding-icon ripple-effect" name="submit" value="submit" form="register_form">
                        <div class="div">
                        <p style="color:black">Already have an account?&nbsp;&nbsp;<a class="a" href="login.php">Log In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In Popup / End -->


    </div>

</body>



<script>

    $(document).ready(function() {

        $.validator.addMethod("check_firstname", function(value, element){
            return /^[a-zA-Z]+$/.test(value);
        },"First name should have letters only");

        $.validator.addMethod("check_lastname", function(value, element){
            return /^[a-zA-Z]+$/.test(value);
        },"Last name should have letters only");

        $.validator.addMethod("check_email", function(value, element){
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
        },"Invalide Email address");

        $.validator.addMethod("check_password", function(value, element){
             return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(value);
        }, "<br>Please enter atleast 8 characters and has one uppercase letter, one lowercase letter, one number, and one special character");

        $.validator.addMethod("check_conformpassword", function(value, element){
            return value === $("#password").val();
        },"Password and Conform password don't match");

        $('form').validate({
            rules:{
                firstname:{
                    required:true,
                    check_firstname:true
                },
                lastname:{
                    required:true,
                    check_lastname:true
                },
                email:{
                    required:true,
                    check_email:true
                },
                password:{
                    required:true,
                    check_password:true
                },
                conformpassword:{
                    required:true,
                    check_conformpassword:true
                }
            },
            messages:{
                firstname:{
                    required:"First Name cannot be null !"
                },
                lastname:{
                    required:"Last Name cannot be null !"
                },
                email:{
                    required:"Email cannot be null !"
                },
                password:{
                    required:"Password cannot be null !"
                },
                conformpassword:{
                    required:"Conform Password cannot be null !"
                }
            }
        });
        
    });

</script>

<!-- Scripts -->
<s src="scripts/jquery-3.3.1.min.js"></s>
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

</html>