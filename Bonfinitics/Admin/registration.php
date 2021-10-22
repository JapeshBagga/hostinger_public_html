<?php
require_once "connection.php";
if (isset($_POST['submit'])){
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
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$role = $_POST['role'];
			$mobile_no = $_POST['mobile_no'];
			$user_dob = $_POST['user_dob'];
			
			$query = "insert into user (first_name,last_name,email,password,role,mobile_no,user_dob) values('$first_name','$last_name','$email','$password','$role','$mobile_no','$user_dob')";
			mysqli_query($conn, $query);
			header('location:index.php');
		}
		else{
			
		}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="shortcut icon" type="image/x-icon" href="student/img/favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | BonFinitics - Makos</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Admin/css/bootstrap.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="resources/style.css">
	
	<script src='https://www.google.com/recaptcha/api.js' async defer ></script>
	
</head>

<body>
    <div class="LoginPage">
        <div class="container loginVertical">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                    <div class="login bg-white shadow">
                        <img src="resources/images/makos logo2.png." alt="Logo">
                        <h3>Welcome!</h3>
                        <p>Signup</p>
                        <form action="" method="post" class="text-center">
                            <div class="form-group">
                                <input name="first_name" type="text" class="form-control" placeholder="First Name" id="fname" required autofocus>
                            </div>
                            <div class="form-group">
                                <input name="last_name" type="text" class="form-control" placeholder="Last Name" id="lname" required>
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email Address"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" placeholder="Password" class="form-control"
                                    id="exampleInputPassword1" required>
                            </div>
                            <div class="form-group">
                                <input name="mobile_no" type="number" class="form-control" placeholder="Mobile Number" id="phnumber" required>
                            </div>
                            <div class="form-group">
                                <input type="user_dob" class="form-control" placeholder="Date of Birth" id="bdate" required>
                            </div>
							<div class="form-group form-select-list">
								<select class="form-control custom-select-value" name="role" required>
									<option value="">Select Role</option>
									<option value="admin">Admin</option>
									<option value="hod">HOD</option>
									<option value="professor">Professor</option>
									<option value="student">Student</option>
								</select>
							</div>
							<br/>
							<!--<div class="g-recaptcha" data-sitekey="6LeyUrwbAAAAAKCH2IUCkk2h1aCNUKjWFy9iGgxF"></div><br/><br/>-->
                            <button type="submit"  name="submit" class="btn mt-2">Register</button>
                        </form>
                        <div class="loginLinks">
                            <a href="index.php" title="sign">Go to login</a>
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

</html>