<!doctype html>
<html lang="en">

<head>
	<link rel="shortcut icon" type="image/x-icon" href="student/img/favicon.ico">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src='https://www.google.com/recaptcha/api.js' async defer ></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Admin/css/bootstrap.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="resources/style.css">
	

    <title>Login Page</title>
</head>
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
				$sql="SELECT email, password, role FROM user WHERE email='$email'";
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
						if($row['role']=="admin")
							header("location: Admin/index.php");
						else if($row['role']=="hod")
							header("location: HOD/index.php");
						else if($row['role']=="professor")
							header("location: Professor/index.php");
						else
							header("location: Student/index.php");
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
<body>
    <div class="LoginPage">
        <div class="container loginVertical">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                    <div class="login bg-white shadow">
                        <img src="resources/images/makos logo2.png" alt="Logo">

                        <h3>Welcome Back!</h3>
                        <p>User Login</p>
                        <form action="" method="post" class="text-center">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email Address"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" required autofocus>
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" placeholder="Password" class="form-control"
                                    id="exampleInputPassword1" required>
                            </div>
							<br/>
							<!--<div class="g-recaptcha" data-sitekey="6LeyUrwbAAAAAKCH2IUCkk2h1aCNUKjWFy9iGgxF"></div><br/><br/>-->
                            <button type="submit" name="submit"  class="btn">Login</button>
                        </form>
                        <div class="loginLinks">
                            <!--<a href="/" title="Forget Password">Forget Password?</a>-->
                            <a href="registration.php" class='floatRight' title="Register">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Scripts -->
    <script src="Admin/js/vendor/bootstrap/jquery-1.12.4.min.js"></script>
    <script src="Admin/js/vendor/bootstrap/bootstrap.min.js"></script>

</body>
</body>

</html>