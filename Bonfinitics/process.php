<?php
/*
require_once 'connection.php';
session_start();
if(isset($_POST["submit"])){
	$email = mysqli_real_escape_string($conn, $_POST['email']);
    $email = trim($email);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);
    #$pwd = md5($pwd);
    #$pwd = sha1($pwd);
	if(empty($email) || empty($pwd)){
        $_SESSION['message_login'] = "email And Password Is Empty !!";
        header("location:index.php");
	}
	else{
		$sql="SELECT email, password, role FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			$_SESSION['message_login'] = "User Not Exist !!";
			header("location:index.php");
		}
		else{
            $row = mysqli_fetch_assoc($result);
			if($pwd != $row["password"]){
					$_SESSION['message_login'] = "Wrong email or Password !!";
					header("location:index.php");
			}
			else if($pwd == $row["password"]){
				$_SESSION["email"] = $row["email"];
				$_SESSION["password"] = $row["password"];
				if($row['role']=="admin")
					header("location: admin/index.php");
				else if($row['role']=="hod")
					header("location: hod/index.php");
				else if($row['role']=="hod")
					header("location: professor/index.php");
				else
					header("location: student/index.php");
			}
			else{
				 $_SESSION['message_login'] = "Wrong email or Password !!";
				 header("location: index.php");
			}
		}
	}
}
else{
	header("location: index.php");
}
*/
?>