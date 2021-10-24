<?php
    require_once 'connection.php';
    session_start();
    if(isset($_POST["submit"])){
        $hash = md5(rand(0,1000) );
        $role = $_POST['role'];
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);
        $name = mysqli_real_escape_string($conn, $_POST['name']); $name = trim($name);
        $email =mysqli_real_escape_string($conn, $_POST['email']); $email = trim($email);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']); $phone = trim($phone);
        $addr = mysqli_real_escape_string($conn, $_POST['addr']);
        $company_name=mysqli_real_escape_string($conn, $_POST['company_name']);
        $institute_name=mysqli_real_escape_string($conn, $_POST['institute_name']);
      
        if(empty($email) || empty($pwd)){
          echo "<script> alert('Email And Password Is Empty !!'); </script>";
        }
        else{
            $sql="SELECT email, password, role FROM login WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck >= 1) echo "<script> alert('User Already Exist !!'); </script>";
            
            $sql="SELECT email, password, role FROM login WHERE phone='$phone'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck >= 1) echo "<script> alert('Phone Number Already Exist !!'); </script>";
            
            else if($role=="company"){
              $query = "INSERT INTO login (name, org_name, email, password, role, phone, addr, hash, active) VALUES('$name','$company_name','$email','$pwd','$role','$phone', '$addr', '$hash','0')";
              mysqli_query($conn,"INSERT INTO login (name, org_name, email, password, role, phone, addr, hash, active) VALUES('$name','$company_name','$email','$pwd','$role','$phone', '$addr', '$hash','0')") or die(mysqli_error($conn));
            }
            
            else if($role=="college"){
              $query = "INSERT INTO login (name, org_name, email, password, role, phone, addr, hash, active) VALUES('$name','$institute_name','$email','$pwd','$role','$phone', '$addr', '$hash','0')";
               $res= mysqli_query($conn, $query); 
            }
                
            else{	
                $query = "INSERT INTO login (name, email, password, role, phone, addr, hash, active) VALUES('$name','$email','$pwd','$role','$phone', '$addr', '$hash','0')";
                $res=mysqli_query($conn, $query); 
            }

            $to      = $email; // Send email to our user
            $subject = 'Signup Verification | Makos InfoTech Pvt Ltd'; 
            $message = '
  
Thanks for signing up '.$name.'.

Your account has been created, you can login with the credentials after you have activated your account by pressing the url below.
  
------------------------

Please click this link to activate your account:
https://jobaskit.com/verify.php?email='.$email.'&hash='.$hash.'

------------------------
  
We Wish You have a great journey with us. Feel Free to give feedback at feedback@jobaskit.com

Thank you and Have a Nice Day!
  
'; // Our message above including the link
                                  
            $from = 'From:japbag2005@gmail.com' . "\r\n"; // Set from headers
            mail($to, $subject, $message, $from); // Send our email

            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email; 
            $_SESSION["role"] = $row; 
            $_SESSION["org_name"] = $company_name;
            $msg = 'Please verify your account by clicking the activation link that has been send to your email.';
             
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
            <a class="navbar-brand" href="index.php"
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
            <div class="col-sm-5" style="margin-top: 8%;">
              <div class="bannerForm">
                <h2>Sign-Up</h2>
                <form action="" method="post" role="form">
                    <input type="hidden" id="roleNew_id" name="roleNew_id" >
                    <div class="row">
                        <div class="col-lg-6 col-6 mb-2">
                            <input type="radio" onchange="myInstituteFun()"  name="role" id="institute" value="institute"required>
                        	<label id="a_text" for="Institute">Institute</label>
                        </div>
                        <div class="col-lg-6 col-6 mb-2">
                        	<input type="radio" onchange="myCompanyFun()" name="role" id="company" value="company" required>
                        	<label id="b_text" for="Company"> Company</label>
                        </div>
                    </div>
                    
                    <br>
                    
                    <div class="row" id="institute_options">
                        <div class="col-lg-4">
                            <input type="radio"  name="select1" id="student" value="Student">
                            <label for="student">Institute Student</label>
                        </div>
                        <div class="col-lg-4">
                        	<input type="radio" name="select1" id="stu_co"  value="student_co">
                        	<label id="stu_co" for="b">Student Coordinator</label>
                        </div>
                       <div class="col-lg-4">
                        	<input type="radio" name="select1" id="facu_co"  value="faculty">
                        	<label id="facu_co" for="b">Faculty Coordinator</label>
                        </div>
                    </div>
                     
                
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input name="company_name" class="form-control" id="company_name" placeholder="Company Name" type="text">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input name="institute_name" class="form-control" id="institute_name" placeholder="Institute Name" type="text">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input name="name" class="form-control" placeholder="Name" type="text"required>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email" type="email"required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <!--<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>-->
                    </div>
                    <input name="password" class="form-control" placeholder="Password" type="password"required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <!--<span class="input-group-text"><i class="fas fa-phone"></i></span>-->
                    </div>
                    <input name="phone"class="form-control" placeholder="Phone number" type="text"required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <!--<span class="input-group-text"><i class="ni ni-hat-3"></i></span>-->
                    </div>
                    <input name="addr" class="form-control" placeholder="Address" type="text"required>
                  </div>
                </div>
    <!--             <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div> -->

                 <div class="row my-4">
                  <div class="col-12">
                       <span class="text-warning"><?php echo $msg; ?></span>
                    </div>
                  </div>

				<!--<input name="role" value="student" class="form-control" placeholder="" type="hidden">-->
				<!--<div class="g-recaptcha" data-sitekey="6LeyUrwbAAAAAKCH2IUCkk2h1aCNUKjWFy9iGgxF"></div><br/><br/>-->
                <div class="text-center">
                  <button type="submit" name="submit" id="submitbtn" class="btn btn-warning mt-4">Create account</button>
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
    
    <!--Signup page script Yes/No-->
    <script language="Javascript">
        function yesnoCheck() {

            if ($("#yesCheck").prop("checked", true)) {
                $("#ifYes").show();
                $("#ifno").hide();
                $("#role_id").val('college')
            }
            else{
                $("#ifYes").hide();
            }

        }
        function noCheck() {
            if ($("#nooCheck").prop("checked", true)) {
                $("#ifno").show();
                $("#ifYes").hide();
                $("#role_id").val('company')
            }
            else{
                $("#ifno").hide();
            }
            
        }
        /*function checkvalue(val) {
            if (val === "affliated")
                document.getElementById('color').style.display = 'block';
            else
                document.getElementById('color').style.display = 'none';
        }*/

    </script>   
    
    <!--Register.html page script-->
    
    <script>
        // var modal=document.getElementById("company_display");
        
        document.getElementById("company_name").style.display="none";
        document.getElementById("institute_name").style.display="none";
        document.getElementById("institute_options").style.display="none";

        function myInstituteFun(val) {
            document.getElementById("roleNew_id").value = "Institute";
            document.getElementById("company_name").style.display="none";
            document.getElementById("institute_options").style.display="block";
            document.getElementById("institute_name").style.display="block";
         }
        
        function myCompanyFun(val) {
            document.getElementById("roleNew_id").value = "Company";
            document.getElementById("institute_options").style.display="none";
            document.getElementById("institute_name").style.display="none";
            document.getElementById("company_name").style.display="block";
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
           $('#usercheck').hide();    
            let usernameError = true;
            $('#usernames').keyup(function () {
                validateUsername();
            });
              
            function validateUsername() {
              let usernameValue = $('#usernames').val();
              if (usernameValue.length == '') {
              $('#usercheck').show();
                  usernameError = false;
                  return false;
              } 
              else if((usernameValue.length < 3)|| 
                      (usernameValue.length > 15)) {
                  $('#usercheck').show();
                  $('#usercheck').html
        ("**length of username must be between 3 and 15");
                  usernameError = false;
                  return false;
              } 
              else {
                  $('#usercheck').hide();
              }
            }
        
            //Institute Name
            $('#inscheck').hide();    
            let insError = true;
            $('#institutee').keyup(function () {
                validateinsname();
            });
              
            function validateinsname() {
              let insValue = $('#institutee').val();
              if (insValue.length == '') {
              $('#inscheck').show();
                  insError = false;
                  return false;
              } 
             
              else {
                  $('#inscheck').hide();
              }
            }
        
            //email
           //  $("#email").keyup(function(){
        	// 		if(validateEmail()){
        	// 			// if the email is validated
        	// 			// set input email border green
        	// 			$("#email").css("border","2px solid green");
        	// 			// and set label 
        	// 			$("#emailMsg").html("<p class='text-success'>Validated</p>");
        	// 		}else{
        	// 			// if the email is not validated
        	// 			// set border red
        	// 			$("#email").css("border","2px solid red");
        	// 			$("#emailMsg").html("<p class='text-danger'>Un-validated</p>");
        	// 		}
        		
        	// 	});
           //  function validateEmail(){
        	// 	// get value of input email
        	// 	var email=$("#email").val();
        	// 	// use reular expression
        	// 	 var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        	// 	 if(reg.test(email)){
        	// 	 	return true;
        	// 	 }else{
        	// 	 	return false;
        	// 	 }
           
        
        	// }
        
           //email
           $('#emailcheck').hide();    
            let emailError = true;
            $('#email').keyup(function () {
                validateemail();
            });
              
            function validateemail() {
              let emailValue = $('#email').val();
              var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
              if ((emailValue.length !== '')&&(reg.test(emailValue))) {
                 $('#emailcheck').hide();
             
              } 
             
              else {
                 
                  $('#emailcheck').show();
                  emailError = false;
                  return false;
              }
            }
        
           //validate phone number
           $('#phonecheck').hide();    
            let phoneError = true;
            $('#phone').keyup(function () {
                validatephone();
            });
              
            function validatephone() {
              let phone = $('#phone').val();
              var reg = /[1-9]{1}[0-9]{9}/;
              if ((reg.test(phone)) && (phone.length==10)) {
              $('#phonecheck').hide();
                
              } 
             
              else {
                  $('#phonecheck').show();
                  phoneError = false;
                  return false;
              }
            }
        
            //Location
            $('#locheck').hide();    
            let loError = true;
            $('#location').keyup(function () {
                validateloname();
            });
              
            function validateloname() {
              let usernameValue = $('#location').val();
              if (usernameValue.length == '') {
              $('#locheck').show();
                  loError = false;
                  return false;
              } 
             
              else {
                  $('#locheck').hide();
              }
            }
    
    
    
            //submit
            $('#submitbtn').click(function () {
                 usernameError=true;
                 insError=true;
                 emailError=true;
                 loError=true;
                 phoneError=true;
                 
                validateUsername();
                validateinsname();
                validateloname();
                validateemail();
                validatephone(); 
        
              //   validateConfirmPasswrd();
            
                if ((usernameError == true) &&(insError == true)&&(emailError==true)&&(loError==true)&&(phoneError==true) ){
                    return true;
                } else {
                    return false;
                }
            });

        });
    </script>

  </body>
</html>


    
