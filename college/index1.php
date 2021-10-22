<?php
  require_once 'connection.php';
//   require_once 'config.php';
  $google_client->setRedirectUri('https://jobaskit.com/eprep/manish-test.php');
  session_start();
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
                header("location: leaderboard.php");
              else if($row['role']=="admin")
                header("location: admin/leaderboard.php");
            }
            else{
              echo "<script> alert('Wrong email or Password !!'); </script>";
            }
          }
        }
      }
    }
  }
    // if(isset($_GET["code"])){
    // 	// var_dump($_GET["code"]);
    // 	//It will Attempt to exchange a code for an valid authentication token.
    // 	$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
    
    // 	//This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
    // 	if(!isset($token['error'])){
    // 		//Set the access token used for requests
    // 		$google_client->setAccessToken($token['access_token']);
    
    // 		//Store "access_token" value in $_SESSION variable for future use.
    // 		$_SESSION['access_token'] = $token['access_token'];
    
    // 		//Create Object of Google Service OAuth 2 class
    // 		$google_service = new Google_Service_Oauth2($google_client);
    
    // 		//Get user profile data from google
    // 		$data = $google_service->userinfo->get();
    
    // 		$name = "";
    // 		$email = "";
    
    // 		//Below you can find Get profile data and store into $_SESSION variable
    // 		if(!empty($data['given_name']))
    // 		{
    // 			$name = $data['given_name'];
    // 		}
    
    // 		// if(!empty($data['family_name']))
    // 		// {
    // 		// 	$_SESSION['user_last_name'] = $data['family_name'];
    // 		// }
    
    // 		if(!empty($data['email']))
    // 		{
    // 			$email = $data['email'];
    // 		}
    
    // 		// $_SESSION['verified']="YE";
    
    // 		// var_dump($_SESSION);
    // 		// $email = $_POST['email'];
    // 		// var_dump("bruh".$email);
    // 		$query = "SELECT * FROM makos_quiz.login WHERE email = '$email'";
    // 		// $query->bind_param("s", $_POST['email']);
    // // 			$query->execute();
    // 		$result = mysqli_query($conn, $query );
    // 		if(mysqli_num_rows($result) != 0)
    // 		{
    // 			echo error_without_field("The email you entered is already taken");
    // 			// header('Location: index.php');
    // 		}
    // 		else
    // 		{
    // 			$query = $conn->prepare("INSERT INTO login(name, email, role) VALUES(?, ?, ?);");
    // 			$query->bind_param("sss", $name, $email, "student");
    // 			if($query->execute())
    // 				{
    // 					$_SESSION['verified']="YE";
    // 					$_SESSION['name_test'] = $name;
    // 					$_SESSION['email_test'] = $email;
    // 					// echo success("Successfully Signed Up.");
    // 					header('Location: manish-test.php');
    // 				}
    				
    // 			else
    // 				echo error_without_field("Couldn\'t Sign Up. Please try again later");
    // 		}
    
    
    // 		// if(!empty($data['gender']))
    // 		// {
    // 		// 	$_SESSION['user_gender'] = $data['gender'];
    // 		// }
    
    // 		// if(!empty($data['picture']))
    // 		// {
    // 		// 	$_SESSION['user_image'] = $data['picture'];
    // 		// }
    // 	}
    // }	
?>

<?php
    // require "php/connect.php";
    require_once 'php/messageDisp.php';
    require_once 'php/preCommonHeader.php';
    $hstudTablehow = "class='mm-active'";
?>

<!doctype html>   
<html lang="en">?>
    <!-- CONSIDERING COLLEGE ID = 1-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Jobaskit-Campus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
         <meta name="msapplication-tap-highlight" content="no">
         
         <!-- Bootstrap css -->
        <link rel="stylesheet" href="resources/bootstrap/bootstrap.min.css" />
        <!-- Custom css -->
        <link rel="stylesheet" href="resources/css/general.css" />
        <link rel="stylesheet" href="resources/css/header-footer.css" />
        <link rel="stylesheet" href="resources/css/style.css" />
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="resources/icons/flaticon.css" />
        <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
    
        <!--
        =========================================================
        * ArchitectUI HTML Theme Dashboard - v1.0.0
        =========================================================
        * Product Page: https://dashboardpack.com
        * Copyright 2019 DashboardPack (https://dashboardpack.com)
        * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
        =========================================================
        * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
        -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <link href="./main.css" rel="stylesheet">
        <link href="./extra.css" rel="stylesheet">
        <!-- <link href="./assets/css/new_company.css" rel="stylesheet"></head> -->
        <style>
            .app-sidebar:hover{
               overflow-y: scroll;
            }
        </style>
     </head>
    <body>
        <?php
            echo "
            <div class='app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header'>
                <div class='app-header header-shadow'>
                    <div class='app-header__logo'>
                        <div class='logo-src'></div>
                        <div class='header__pane ml-auto'>
                            <div>
                                <button type='button' class='hamburger close-sidebar-btn hamburger--elastic' data-class='closed-sidebar'>
                                    <span class='hamburger-box'>
                                        <span class='hamburger-inner'></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class='app-header__mobile-menu'>
                        <div>
                            <button type='button' class='hamburger hamburger--elastic mobile-toggle-nav'>
                                <span class='hamburger-box'>
                                    <span class='hamburger-inner'></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class='app-header__menu'>
                        <span>
                            <button type='button' class='btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav'>
                                <span class='btn-icon-wrapper'>
                                    <i class='fa fa-ellipsis-v fa-w-6'></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class='app-header__content'>
                        <div class='app-header-left'>
                            <div class='search-wrapper'>
                                <div class='input-holder'>
                                    <input type='text' class='search-input' placeholder='Type to search'>
                                    <button class='search-icon'><span></span></button>
                                </div>
                                <button class='close'></button>
                            </div>
                              </div>
                              <div class='app-header-right'>
                                <div class='header-btn-lg pr-0'>
                                    <div class='widget-content p-0'>
                                        <div class='widget-content-wrapper'>
                                          
                                            <div class='widget-content-left  ml-3 header-user-info'>
                                                <div class='widget-heading'>
                                                   Name
                                                </div>
                                                <div class='widget-subheading'>
                                                    Placement Head
                                                </div>
                                            </div>
                                            <div class='widget-content-left ml-3'>
                                                <div class='btn-group'>
                                                    <a data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'
                                                        class='p-0 btn'>
                                                        <img width='60' class='rounded-circle' src='man-icon.jpg' alt=''>
            
                                                        <i class='fa fa-angle-down ml-2 opacity-8'></i>
                                                    </a>
                                                    <div tabindex='-1' role='menu' aria-hidden='true'
                                                        class='dropdown-menu dropdown-menu-right'>
                                                        <button type='button' tabindex='0' class='dropdown-item'>User
                                                            Account</button>
                                                        <button type='button' tabindex='0' class='dropdown-item'>Settings</button>
                                                        <button type='button' tabindex='0' class='dropdown-item'>Notifications</button>
                                                        <div tabindex='-1' class='dropdown-divider'></div>
                                                        <button type='button' tabindex='0' class='dropdown-item'>Logout</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>              <div class='app-main'>
                    <div class='app-sidebar sidebar-shadow'>
                        <div class='app-header__logo'>
                            <div class='logo-src'></div>
                            <div class='header__pane ml-auto'>
                                <div>
                                    <button type='button' class='hamburger close-sidebar-btn hamburger--elastic'
                                        data-class='closed-sidebar'>
                                        <span class='hamburger-box'>
                                            <span class='hamburger-inner'></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class='app-header__mobile-menu'>
                            <div>
                                <button type='button' class='hamburger hamburger--elastic mobile-toggle-nav'>
                                    <span class='hamburger-box'>
                                        <span class='hamburger-inner'></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class='app-header__menu'>
                            <span>
                                <button type='button'
                                    class='btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav'>
                                    <span class='btn-icon-wrapper'>
                                        <i class='fa fa-ellipsis-v fa-w-6'></i>
                                    </span>
                                </button>
                            </span>
                        </div>
                        <div class='scrollbar-sidebar'>
                            <div class='app-sidebar__inner'>
                                <ul class='vertical-nav-menu'>
                                    <li>
                                        <a href='index.php' ".$hindex.">
                                            <i class='metismenu-icon pe-7s-rocket'></i>
                                             Dashboard
                                        </a>
                                    </li>
                                    <li class='app-sidebar__heading'>Students Demographics</li>
                                    <li>
                                        <a href='students_table.php' ".$hstudTable.">
                                            <i class='metismenu-icon pe-7s-rocket'></i>
                                            View all Students
                                        </a>
                                    </li>
                                    <li class='app-sidebar__heading'>Validation </li>
                                    <li>
                                        <a href='validation.php' ".$hvalid.">
                                            <i class='metismenu-icon pe-7s-diamond'></i>
                                             Validation
                                            <i class='metismenu-state-icon caret-left'></i>
                                        </a>
                                      
                                    <li class='app-sidebar__heading'>Connect With Company</li>
                                    <li>
                                        <a href='new_company.php' ".$hnewComp.">
                                            <i class='metismenu-icon pe-7s-graph2'>
                                            </i>Add new Company 
                                        </a>
                                        <a href='pendingConnections.php' ".$hpendingConn.">
                                            <i class='metismenu-icon pe-7s-graph2'>
                                            </i>Pending Connections
                                        </a>
                                        <a href='accReq.php' ".$haccReq.">
                                            <i class='metismenu-icon pe-7s-graph2'>
                                            </i>Accept Company Request
                                        </a>
                                        <a href='recentView.php' ".$hrecentView.">
                                            <i class='metismenu-icon pe-7s-graph2'>
                                            </i>Accepted Companies
                                        </a>
                                    </li> 
                                    <li class='app-sidebar__heading'>Job Offer</li>
                                    <li>
                                        <a href='job_list.php' ".$hjobList.">
                                            <i class='metismenu-icon pe-7s-graph2'>
                                            </i>New Jobs 
                                        </a>
                                        <a href='Processing.php' ".$hprocess.">
                                            <i class='metismenu-icon pe-7s-graph2'>
                                            </i>Processing  
                                        </a>
                                        <a href='Pending.php' ".$hpending.">
                                            <i class='metismenu-icon pe-7s-graph2'>
                                            </i>Pending  
                                        </a>
                                        <a href='Completed.php' ".$hcompleted.">
                                            <i class='metismenu-icon pe-7s-graph2'>
                                            </i>Completed
                                        </a>
                                    </li> 
                                    
                                    <li class='app-sidebar__heading'>Feedback</li>
                                    <li>
                                        <a href='feedback.php' ".$hfeedback."
                                           >
                                            <i class='metismenu-icon pe-7s-graph2'>
                                            </i>
                                            Feedback Form
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div> ";
        ?>
    
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
                    <a href="<?php echo $google_client->createAuthUrl();?>" title="Google" class="google"><img src="resources/images/google-plus.png" alt="Google"></a>
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
