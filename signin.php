<?php 
session_start();
if(isset($_SESSION["role_id"])) {
       header("Location: signup.php");;
    }

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Log In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/signup.css">
    
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>

</head>

<body>
    <?php  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>
    <!--side img and content-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6 col-xs-12 ">
                <img src="images/jobaskit4.png" class="logo">
                <div class="d-none d-sm-block">
                    <h6 class="title">Shapping your carrer is our first goal.</h6>
                    <img class=" pic3" src="images/man-having-online-job-interview_52683-43379.jpg">
                </div>
            </div>
            <!--side img and content ends-->
            <!--Form Starts-->

            <div class="col-sm-6 col-lg-6 col-xs-12 " id="form1">
                <div class="signup-form">
                    <form action="home.php" method="POST">
                        <h4>Log In</h4>
                        <hr>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email" id="email" 
                                    required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Password" id="password"
                                    required="required">
                            </div>
                        </div><input type="hidden" name="work" value="Login">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg" id="submit1">Login In</button><br><br>
                            <!-- <a id="pass1 " href="forgetpass.php">Forgot password?</a> -->
                        </div>
                        <div class="text-center">New to JobBaskit? <a href="<?php echo $actual_link; ?>/home.php?signup_click=1">Click Here</a></div>


                    </form>

                </div>

            </div>
            <!--Form ends-->
        </div>
    </div>

    <!--footer-->

    <footer class="mainfooter text-center" role="contentinfo">
        <div class="footer-middle">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-3 col-sm-12 col-12">
                        <h4>Follow Us</h4>
                        <p>Join millions of people who organize work and life with Todoist.</p>
                        <ul class="social-network social-circle">

                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4 class="text-left">FEATURES</h4>
                            <ul class="list-unstyled text-left">

                                <li><a href="#">How It Works</a></li>
                                <li><a href="#">For Teams</a></li>
                                <li><a href="#"> Templates</a></li>
                                <li><a href="#">Pricing</a></li>

                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-3 col-sm-3 col-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4 class="text-left">COMPANY</h4>
                            <ul class="list-unstyled text-left">
                                <li><a href="#"> We are Hiring</a></li>
                                <li><a href="#"> About Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Twist</a></li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-3 col-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4 class="text-left">Resources</h4>
                            <ul class="list-unstyled text-left">
                                <li><a href="#"> Productivity Methods</a></li>
                                <li><a href="#"> Channel Partners</a></li>
                                <li><a href="#"> Developer APIs</a></li>
                                <li><a href="#">Download Apps</a></li>
                                <li><a href="#"> Refer a Friend</a></li>
                                <li><a href="#"> Help Center</a></li>
                                <li><a href="#"> Integrations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer ends-->
     <!-- Bootstrap core JavaScript-->
         <script src="vendor/jquery/jquery.min.js"></script>
         <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     
         <!-- Core plugin JavaScript-->
         <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
     
         <!-- Custom scripts for all pages-->
         <script src="js/sb-admin-2.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        

    <script>
    $(document).ready(function(){
        // $.ajax({
        //     url: "login.php", 
        //     method: "POST",
        //     success: function(result){
        //         // $("#script").append(result);
        //     }
        // });
      $("#submit").click(function(){
        let email=document.getElementById("email");
        let password=document.getElementById("password");
         
        $.ajax({
            url: "login.php", 
            method: "POST",
            data: {
                "work":"Login",
                "email":email.value,
                "password":password.value
            },
            success: function(result){
                if (result=="success"){
                    window.top.location.href="college.php";
                   
                }
                else{
                    alert(result)
                    location.reload();
                }
            }
        });
      });
    });
    </script>
</body>

</html>