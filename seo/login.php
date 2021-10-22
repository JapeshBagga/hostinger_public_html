<!DOCTYPE html>
<?php 
	require 'php/connection.php';
	$google_client->setRedirectUri('https://jobaskit.com/seo/login.php');
	require 'php/messageDisp.php';
	// session_start();
	ob_start();
?>
<?php  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
// var_dump("hello");
//             $query = "SELECT * FROM demodashboard.Users";
// 			// var_dump($password.sha1($password));
// 			// $query->bind_param("s", $_POST['email']);
// // 			var_dump("after prepare");
// // 			$query->execute();
// // 			var_dump("after exec");
// // 			$query->bind_result($id,$uname,$email,$password);
// // 			var_dump("after bind".$uname);
// // 			$result = $query->get_result();
// // 			var_dump("after res");
			
// 			$result = mysqli_query($conn, $query);
			
// 			if(mysqli_num_rows($result) != 1)
// 				echo error_without_field("Invalid email/password combination");
// 			else
// 			{	
// 				$row = mysqli_fetch_array($result);
// 				var_dump($row);
// 			}

?>

<html lang="en">
<head>
	<title>Seo-SignIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images2/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images2/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot Password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="signIn">
								Sign In
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<!-- <a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a> -->

						<a href="<?php echo $google_client->createAuthUrl();?>" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<!-- <div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>

	<?php
		if(isset($_POST['signIn']))
		{
			$email = $_POST['email'];
			$password = $_POST["password"];
			// var_dump("bruh".$email);
			$query = "SELECT uname, email, password FROM demodashboard.Users WHERE email = '$email' and password = sha1('$password')";
			// var_dump($password.sha1($password));
			// $query->bind_param("s", $_POST['email']);
// 			$query->execute();
// 			$result = $query->get_result();
			$result = mysqli_query($conn, $query );
			
			if(mysqli_num_rows($result) != 1)
				echo error_without_field("Invalid email/password combination");
			else
			{	
				$row = mysqli_fetch_array($result);
				$_SESSION['verified']="YE";
				$_SESSION['uname'] = $row['uname'];
				echo success("Successfully Logged In.");
				header('Location: index.php');
			    exit;
			}
		}

		if(isset($_GET["code"]))
		{
			// var_dump($_GET["code"]);
			//It will Attempt to exchange a code for an valid authentication token.
			$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

			//This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
			if(!isset($token['error']))
			{
				//Set the access token used for requests
				$google_client->setAccessToken($token['access_token']);

				//Store "access_token" value in $_SESSION variable for future use.
				$_SESSION['access_token'] = $token['access_token'];

				//Create Object of Google Service OAuth 2 class
				$google_service = new Google_Service_Oauth2($google_client);

				//Get user profile data from google
				$data = $google_service->userinfo->get();

				$uname = "";
				$email = "";

				//Below you can find Get profile data and store into $_SESSION variable
				if(!empty($data['given_name']))
				{
					$uname = $data['given_name'];
				}

				// if(!empty($data['family_name']))
				// {
				// 	$_SESSION['user_last_name'] = $data['family_name'];
				// }

				if(!empty($data['email']))
				{
					$email = $data['email'];
				}

				// $_SESSION['verified']="YE";

				// var_dump($_SESSION);
				// $email = $_POST['email'];
				// var_dump("bruh".$email);
				// $query = "SELECT * FROM demodashboard.Users WHERE email = '$email'";
				$query = "SELECT email FROM demodashboard.Users WHERE email = '$email'";
				// $query->bind_param("s", $_POST['email']);
	// 			$query->execute();
				$result = mysqli_query($conn, $query );
				if(mysqli_num_rows($result) != 1)
					echo error_without_field("Please sign up first!");
				else
				{	
					// $query = $conn->prepare("INSERT INTO Users(uname, email, password) VALUES(?, ?, ?);");
					// $passwrd = "Google Login";
					// $query->bind_param("sss", $uname, $email, $passwrd);
					// if($query->execute())
						// {
					// $row = mysqli_fetch_array($result);
					$_SESSION['verified']="YE";
					$_SESSION['uname'] = $uname;
					// echo success("Successfully Signed Up.");
					header('Location: index.php');
						// }
					// else
					// 	echo error_without_field("Couldn\'t Sign Up. Please try again later");
				
				}

				// if(!empty($data['gender']))
				// {
				// 	$_SESSION['user_gender'] = $data['gender'];
				// }

				// if(!empty($data['picture']))
				// {
				// 	$_SESSION['user_image'] = $data['picture'];
				// }
			}
		}
		ob_end_flush();
	?>

		

	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/bootstrap/js/popper.js"></script>
	<script src="vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/daterangepicker/moment.min.js"></script>
	<script src="vendor2/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js2/main.js"></script>

</body>
</html>