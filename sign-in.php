<?php 
  session_start();
  require_once 'connection.php';
  require_once 'config.php';
//   $google_client->setRedirectUri('https://jobaskit.com/manish-test.php');
  
  if(isset($_POST["submit"])){

    if(empty($_POST['g-recaptcha-response'])){
      echo "<script> alert('Verify reCaptcha Checkbox !'); </script>";
    }
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
      $secret = '6LeyUrwbAAAAAHihf9AzThOxdnD1_e3Mj44yv1EP';
      $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
      $responseData = json_decode($verifyResponse);
      if($responseData->success){
        
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $email = trim($email);
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);
        #$pwd = md5($pwd);
        #$pwd = sha1($pwd);
        if(empty($email) || empty($pwd)){
          echo "<script> alert('Email And Password Is Empty !!'); </script>";
        }
        else{
          $sql="SELECT login_id, name, email, password, role, org_name FROM login WHERE email='$email'";
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
              $_SESSION["name"] = $row["name"];
              $_SESSION["email"] = $row["email"];
              $_SESSION["login_id"] = $row["login_id"];
              $_SESSION["org_name"] = $row["org_name"];
              

              if($row['role']=="company") header("location: company/index.php");
              else if($row['role']=="college") header("location: college/index.php");
              else if($row['role']=="student") header("location: eprep/leaderboard.php");
              else if($row['role']=="admin") header("location: eprep/admin/leaderboard.php");
            }
            else{
              echo "<script> alert('Wrong email or Password !!'); </script>";
            }
          }
        }
      }
    }
  }
// 		if(isset($_GET["code"])){
// 			// var_dump($_GET["code"]);
// 			//It will Attempt to exchange a code for an valid authentication token.
// 			$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

// 			//This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
// 			if(!isset($token['error']))
// 			{
// 				//Set the access token used for requests
// 				$google_client->setAccessToken($token['access_token']);

// 				//Store "access_token" value in $_SESSION variable for future use.
// 				$_SESSION['access_token'] = $token['access_token'];

// 				//Create Object of Google Service OAuth 2 class
// 				$google_service = new Google_Service_Oauth2($google_client);

// 				//Get user profile data from google
// 				$data = $google_service->userinfo->get();

// 				$name = "";
// 				$email = "";

// 				//Below you can find Get profile data and store into $_SESSION variable
// 				if(!empty($data['given_name'])) $name = $data['given_name'];

// 				// if(!empty($data['family_name'])) $_SESSION['user_last_name'] = $data['family_name'];
// 	

// 				if(!empty($data['email'])) $email = $data['email'];

// 				// $_SESSION['verified']="YE";

// 				// var_dump($_SESSION);
// 				// $email = $_POST['email'];
// 				// var_dump("bruh".$email);
// 				$query = "SELECT * FROM makos_quiz.login WHERE email = '$email'";
// 				// $query->bind_param("s", $_POST['email']);
// 	// 			$query->execute();
// 				$result = mysqli_query($conn, $query );
// 				if(mysqli_num_rows($result) != 0)
// 				{
// 					echo error_without_field("The email you entered is already taken");
// 					// header('Location: index.php');
// 				}
// 				else
// 				{
// 					$query = $conn->prepare("INSERT INTO login(name, email, role) VALUES(?, ?, ?);");
// 					$query->bind_param("sss", $name, $email, "student");
// 					if($query->execute())
// 						{
// 							$_SESSION['verified']="YE";
// 							$_SESSION['name_test'] = $name;
// 							$_SESSION['email_test'] = $email;
// 							// echo success("Successfully Signed Up.");
// 							header('Location: manish-test.php');
// 						}
						
// 					else
// 						echo error_without_field("Couldn\'t Sign Up. Please try again later");
// 				}

// 				// if(!empty($data['gender']))
// 				// {
// 				// 	$_SESSION['user_gender'] = $data['gender'];
// 				// }

// 				// if(!empty($data['picture']))
// 				// {
// 				// 	$_SESSION['user_image'] = $data['picture'];
// 				// }
// 			}
// 		}	
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
    <!--<link rel="stylesheet" href="resources/icons/flaticon.css" />-->
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
                <!--<img src="/resources/images/bannerImg.png" title="Jobaskti">-->
              </div>
            </div>
            <div class="col-sm-5">
              <div class="bannerForm">
                <h2>Login</h2>
                <form action="" method="post" role="form">
                  <div class="form-group">
                      <input name="email" class="form-control" placeholder="Email" type="email" id="email" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" id="exampleInputPassword1" required>
                  </div>
                  <div class="g-recaptcha" data-sitekey="6LeyUrwbAAAAAKCH2IUCkk2h1aCNUKjWFy9iGgxF"></div>
                  <button type="submit" name="submit" class="btn mt-2">Sign in</button>
                </form>
                <p class="or">Or Login with</p>
                <!--<p class="lw"></p>-->
                <a href="<?php echo"#"//echo $google_client->createAuthUrl();?>" title="Google" class="google"><img src="resources/images/google-plus.png" alt="Google"></a>
                <a href="#" title="Linkedin" class="linkedIn"><img src="resources/images/linkedin.png" alt="Linkedin"></a>
                <!-- <div class="bannerFormGoogle">
                  <a href="" title="Facebook">
                    <div class="bannerFormGoogleImg">
                      <img src="resources/images/google-plus.png" title="Google Login">
                    </div>
                    <div class="bannerFormGoogleTxt">
                      <p class="mb-0">Google</p>
                    </div>
                  </a>
                </div>
                <div class="bannerFormFacebook">
                  <a href="" title="Facebook">
                    <div class="bannerFormFacebookImg">
                      <img src="resources/images/facebook.png" title="Facebook Login">
                    </div>
                    <div class="bannerFormFacebookTxt">
                      <p class="mb-0">facebook</p>
                    </div>
                  </a>
                </div> -->
                <hr>
                <p class="bannerFormRegister m-0">Create an account <a href="sign-up.php" alt='Sign Up'>Sign Up!</a></p>
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
