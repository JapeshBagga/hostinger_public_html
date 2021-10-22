<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-color: #075F3E;">
                    <span class="login100-form-title-1">
                        FORGET PASSWORD
                    </span>
                </div>

               <form class="login100-form validate-form" id="login" action="" method="POST">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Enter Email ID">
                        <span class="focus-input100"></span>
                    </div>

                    <br>
                        <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="submit">
                            SUBMIT
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/main.js"></script>

</body>
</html>

<?php
include ("connection.php");
include ('mail.php');

if (isset($_POST['submit']) || !empty($_POST['submit'])) {

	if (isset($_POST['email']) && !empty($_POST['email'])) {

		$email      = $_POST['email'];
		$ip_address = $_SERVER['REMOTE_ADDR'];
		$sentdate   = date('Y-m-d');
		//$sel      = "SELECT email FROM first_allotment WHERE email='".$usname."'";
		$sel      = "SELECT email FROM users WHERE email='".$email."'";
		$sel_rslt = $conn->query($sel);

// echo $sql = "SELECT * FROM users WHERE email='".$email."' and password='".$pass."'";
// 					$result = $conn->query($sql);
// 					if ($result->num_rows > 0) {
		// while($row = $result->fetch_assoc()) {
		// 				echo $_SESSION["role_id"]=$row["role_id"];
		// 				// $_SESSION["type"]="company";
		// 				echo 'success';
		// 			  }
		// 			} 
		if (mysqli_num_rows($sel_rslt) > 0) {

			//echo "Username Exist";
			$sel2 = "SELECT email, password FROM users WHERE email='".$email."'";
			//$sel2      = "SELECT email,password FROM first_allotment WHERE email='".$usname."'";
			$sel2_rslt = $conn->query($sel2);

			if (mysqli_num_rows($sel2_rslt) > 0) {
				//echo '<br />'."password exist".'<br />';//

				while ($row = mysqli_fetch_array($sel2_rslt)) {
					$mobile = $row["password"];
					$email  = $row["email"];
				}
				echo $mobile;
				$email;



		    	$mailer = new PHPMailer();
				//$mailer->IsSMTP();
				$mailer->IsHTML(true);
				$mailer->SMTPDebug  = 1;
				$mailer->SMTPAuth   = true;
				$mailer->SMTPSecure = 'ssl';
				$mailer->Host       = "smtp.hostinger.com";
				$mailer->Port       = 465;
				//$mailer->Port =587;//
				$mailer->Username = "heera.cirp.ar@gmail.com";
				$mailer->Password = "pkrajuip";
				// $to               = $email;
				$to               = 'muthukarthicm@gmail.com';
				$from             = "heera.cirp.ar@gmail.com";
				$subject          = "Request : Recover Password";
				
				$body             = "<html>
<head>
<center>
<table>
<tr height=32px;>
<th>
     <table style='min-width:332px;max-width:600px;border:1px solid #e0e0e0;border-bottom:0;border-top-left-radius:3px;border-top-right-radius:3px' cellpadding='0' cellspacing='0' bgcolor='rgba(52, 83, 97, 0.99);' border='0' width='100%'><tbody><tr><td colspan='3' height='72px'></td></tr>
<tr><td width='32px'></td>
<td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:24px;color:#ffffff;line-height:1.25'>Your password has been recovered</td><td width='32px'></td></tr>
   <tr>
      <td colspan='3' height='18px'></td>
      </tr></tbody>
    </table>

<table style='min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:1px solid #c0c0c0;border-top:0;border-bottom-left-radius:3px;border-bottom-right-radius:3px' cellpadding='0' cellspacing='0' bgcolor='#FAFAFA' border='0' width='100%'><tbody>
    <tr height='16px'><td rowspan='3' width='32px'></td>
    <td></td><td rowspan='3' width='32px'></td></tr>

     <tr><td><table style='min-width:300px' cellpadding='0' cellspacing='0' border='0'>
         <tbody><tr><td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;padding-bottom:4px;text-align: left'>Dear Sir/Madam,</td></tr>

        <tr><td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;padding:4px 0;text-align: left'>Your password and email is recovered below as per your request.</td></tr>
     <tr><td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;padding:4px 0;text-align: left'>click here <a href='http://jobaskit.com/'>http://jobaskit.com/
       </a>to login to your account with your recovered password and email.
<table align='center' border='0' cellpadding='5' cellspacing='5'>

                    <tr>
                        <th>Email:</th>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td>$mobile</td>
                    </tr>
        </table>
                </td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                </th>
                </tr>
</table>
</center>
</head></html>";
				/*$body             = "<h3>Request for User Password Reset</h3>
				<table align='left' border='1' cellpadding='5' cellspacing='5'>

				<tr>
				<th>Username:</th>
				<td>$usname</td>
				</tr>
				<tr>
				<th>Password:</th>
				<td>$pwd</td>
				</tr>
				</table></br></br>";*/
				// var_dump($body);die();
// var_dump($email );die('sfsf');

				$mailer->From     = $from;
				$mailer->FromName = "Jobaskit Forget Password";
				$mailer->Subject  = $subject;
				$mailer->Body     = $body;

				$mailer->AddAddress($to);
				//$mailer->AddCC($from);
				$send = $mailer->Send();
				$mailer->ClearAddresses();
				$mailer->ClearCCs();
				if ($send) 
				{
	
					echo "<script language='javascript'>
							window.alert('mail send successfully,please check password in your Email inbox')
							window.location.href='index.php';
        				   </script>";
				} else 
				{
					echo "<script language='javascript'>
									window.alert('mail submission failed')
									window.location.href='index.php';
				         </script>";
				}

			}

		} 
		else 
		{
			echo "<script>
						window.alert('Email doesnot exist')
						window.location.href='index.php';
			     </script>";
		}

	}
}

?>