<?php
  require_once 'connection.php';
  session_start();
  if(isset($_POST["submit"])){
    /*
    if(empty($_POST['g-recaptcha-response'])){
      echo "<script> alert('Verify reCaptcha Checkbox !'); </script>";
    }
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
      $secret = '6LeyUrwbAAAAAHihf9AzThOxdnD1_e3Mj44yv1EP';
          $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
          $responseData = json_decode($verifyResponse);
          if($responseData->success){
        
        */
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $email = trim($email);
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);
        #$pwd = md5($pwd);
        #$pwd = sha1($pwd);
        if(empty($email) || empty($pwd)){
          
          echo "<script> alert('Email And Password Is Empty !!'); </script>";
        }
        else{
          $sql="SELECT email, password, role FROM login WHERE email='$email'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck < 1){
            echo "<script> alert('User Not Exist !!'); </script>";
          }
          else{
            $row = mysqli_fetch_assoc($result);
            if($pwd != $row["password"]){
                echo "<script> alert('Wrong email or Password !!'); </script>";
            }
            else if($pwd == $row["password"]){
              $_SESSION["email"] = $row["email"];
              $_SESSION["password"] = $row["password"];
              $_SESSION["role"] = $row["role"];
              if($row['role']=="student")
                header("location: registration.php");
              else if($row['role']=="admin")
                header("location: admin/leaderboard.php");
            }
            else{
              echo "<script> alert('Wrong email or Password !!'); </script>";
            }
          }
        }
      }
    else{
      
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Login | JoBaskit</title>
  
  <?php require_once 'requires/top-scripts.php' ?>

  <style>
    body, .header{
      background: linear-gradient(87deg, #ec9f05 0, #ff4e00 100%) !important;
    }
  </style>
  
</head>
<body class="bg-default">
  
 <!-- Navbar -->
 <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="dashboard.html">
      <img src="img/brand/logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="dashboard.html">
              <img src="img/brand/blue.png">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="dashboard.html" class="nav-link">
            <span class="nav-link-inner--text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="login.html" class="nav-link">
            <span class="nav-link-inner--text">Login</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="register.html" class="nav-link">
            <span class="nav-link-inner--text">Register</span>
          </a>
        </li>
      </ul> -->
      
      <!--Right Sign up button-->
      <hr class="d-lg-none" />
      <ul class="navbar-nav align-items-lg-center ml-lg-auto">
        <li class="nav-item d-none d-lg-block ml-lg-4">
          <!-- <a href="sign-up.php" class="btn btn-neutral btn-icon">
            <span class="btn-inner--icon">
              <i class="fas fa-shopping-cart mr-2"></i>
            </span>
            <span class="nav-link-inner--text">SIGN-UP</span>
          </a> -->

        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <!-- <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p> 
            </div>
          </div>
        </div>
      </div> -->
      <!-- <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div> -->
    </div>

    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8">
          <div class="card bg-secondary border-0 mb-0">
            <!-- Sign in with Github and google  -->
            <!-- <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div> -->
            
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <!-- <small>Or sign in with credentials</small> -->
                <h2>LOGIN</h2>
              </div>
              <form action="" method="post" role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
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
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-warning my-4">Sign in</button>
                </div>
              </form>
              <div class="row">
                <div class="col-6">
                  <a href="#" class="text-dark"><small>Forgot password?</small></a>
                </div>
                <div class="col-6 text-right">
                  <a href="sign-up.php" class="text-dark"><small>Create new account</small></a>
                </div>
             </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <br> <br> 

  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2021 <a href="https://jobaskit.com/" class="font-weight-bold ml-1" target="_blank">JoBaskit</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://jobaskit.com/" class="nav-link" target="_blank">Makos Info Tech Pvt Ltd</a>
            </li>
            <li class="nav-item">
              <a href="https://jobaskit.com/" class="nav-link" target="_blank">About Us</a>
            </li>
            <!-- <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <?php require_once 'requires/end-scripts.php' ?>
</body>

</html>