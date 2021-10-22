<?php
    require_once 'connection.php';
    session_start();
    if(isset($_POST["submit"])){
        $hash = md5(rand(0,1000) );
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);
        $name = mysqli_real_escape_string($conn, $_POST['name']); $name = trim($name);
        $email =mysqli_real_escape_string($conn, $_POST['email']); $email = trim($email);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']); $phone = trim($phone);
        
        if(empty($email) || empty($pwd)){
          echo "<script> alert('Email And Password Is Empty !!'); </script>";
        }
        else{
            $sql="SELECT email, password, role FROM login WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck >= 1) echo "<script> alert('User Already Exist !!'); </script>";
            else{	
                $query = "INSERT INTO login (name, email, password, role, phone, hash, active) VALUES('$name','$email','$pwd','student','$phone','$hash','0')";
                mysqli_query($conn, $query); 
            
                $to      = $email; // Send email to our user
                $subject = 'Signup | Verification Makos InfoTech Pvt Ltd'; 
                $message = '
                  
                Thanks for signing up!
                Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
                  
                ------------------------
                Username: '.$name.'
                Password: '.$password.'
                ------------------------
                  
                Please click this link to activate your account:
                https://jobaskit.com/eprep/verify.php?email='.$email.'&hash='.$hash.'
                  
                '; // Our message above including the link
                                      
                $from = 'From:japbag2005@gmail.com' . "\r\n"; // Set from headers
                mail($to, $subject, $message, $from); // Send our email

                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $msg = 'Please verify your account by clicking the activation link that has been send to your email.';
            }
        }
    }
	
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Login | JoBaskit</title>
    
    

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="resources/bootstrap/bootstrap.min.css" />
    <!-- Custom css -->
    <link rel="stylesheet" href="resources/css/general.css" />
    <link rel="stylesheet" href="resources/css/header-footer.css" />
    <link rel="stylesheet" href="resources/css/style.css" />
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="resources/icons/flaticon.css" />
    <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
  </head>
  <body>
    <!-- Header Navbar -->
    <header>
      <nav class="navbar navbar-default nav-fixed">
        <div class="container">
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle collapsed"
              data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1"
              aria-expanded="false"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="index.html"
              >Jobaskit</a> -->
            <a class="navbar-brand" href="index.html"
              ><img src="resources/images/logo.png" title="Jobaskit"
            /></a>
          </div>
          <div
            class="collapse navbar-collapse"
            id="bs-example-navbar-collapse-1"
          >
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://jobaskit.com/feature_1.php" title="Colleges">Colleges</a></li>
              <li><a href="https://jobaskit.com/feature.php" title="Requiters">Recruiters</a></li>
              <li><a href="users.html" title="Users">Users</a></li>
              <li><a href="features.html" class="pr-0" title="Features">Features</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Banner -->
    <div class="banner">
      <div class="bannerOverlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <div class="bannerDesc">
                <img src="/resources/images/bannerImg.png" title="Jobaskti">
              </div>
            </div>
            <div class="col-sm-5">
              <div class="bannerForm">
                <h2>Sign-Up</h2>
                 <form action="" method="post" role="form">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input name="name" class="form-control" placeholder="Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input name="password" class="form-control" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input name="phone"class="form-control" placeholder="Phone number" type="text">
                  </div>
                </div>
                <!-- <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div> -->


                 <div class="row my-4">
                  <div class="col-12">
                       <span class="text-warning"><?php echo $msg; ?></span>
                    </div>
                  </div>

				<input name="role" value="student" class="form-control" placeholder="" type="hidden">
				<!--<div class="g-recaptcha" data-sitekey="6LeyUrwbAAAAAKCH2IUCkk2h1aCNUKjWFy9iGgxF"></div><br/><br/>-->
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-warning mt-4">Create account</button>
                </div>
              </form>
                
                <!--<hr>-->
                <!--<p class="bannerFormRegister m-0">Create an account <a href="sign-up.php" alt='Sign Up'>Sign Up!</a></p>-->
              </div>
              <p class="formBtmDesc text-center">Connect With best Campuses and Recruiters in one place.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h4 class="mt-0">Follow US</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, fuga consequatur! Asperiores facilis ullam perspiciatis.</p>
            <ul class="nav navbar-nav">
              <li><a href="#" title="Facebook" class="facebook"><img src="resources/images/facebook.png" alt="Facebook"></a></li>
              <li><a href="#" title="Google" class="google"><img src="resources/images/google-plus.png" alt="Google"></a></li>
              <li><a href="#" title="Linkedin" class="linkedIn"><img src="resources/images/linkedin.png" alt="Linkedin"></a></li>
              <li><a href="#" title="Twitter" class="twitter"><img src="resources/images/twitter.png" alt="Twitter"></a></li>
            </ul>
          </div>
          <div class="col-sm-2">
            <h4>About</h4>
            <ul class="quickLinks">
              <li><a href="#" title="">Blog</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h4>Solutions</h4>
            <ul class="quickLinks">
              <li><a href="https://jobaskit.com/feature_1.php" title="Colleges">Colleges</a></li>
              <li><a href="https://jobaskit.com/feature.php" title="Recruiters">Requiters</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h4>For advertisements contact</h4>
            <div class="footerIT">
              <div class="footerITImg">
                <img src="resources/images/call.png">
              </div>
              <div class="footerITText">
                <p>84354 34233</p>
              </div>
            </div>
            <div class="footerIT">
              <div class="footerITImg">
                <img src="resources/images/email.png">
              </div>
              <div class="footerITText">
                <p>jobaskit@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="copyRights text-center">
              <p class="mb-0">
                Copyright © 2021 Jobaskit | All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap scripts-->
    <script src="resources/bootstrap/jquery-1.12.4.min.js"></script>
    <script src="resources/bootstrap/bootstrap.min.js"></script>
    <!-- Custom scripts-->
    <script src="resources/js/site.js"></script>
    
  </body>
</html>
