<?php
	// Starting the session to keep the email logged in.
	session_start();

	// This ("db.php") file contains Database Connection code.
	require_once 'connection.php';

	/**
	* Taking email and password from session.
	* Validating the email.
	*/
	$email = $_SESSION["email"];
	//$password = $_SESSION["password"];
	$role = "student";
	$query = "select login_id, name, email, alternate_email, password, role, interest, phone from login where (email='$email' and role='student')";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
// 	var_dump($row);
//  	die("j");
	$login_id = $row["login_id"];
	if(empty($email)){
		header("location: index.php");
	}
	else if($_SESSION["email"] != $row["email"]){
		header("location: index.php");
	}
	//else if($password != $row["password"]){
	//	header("location: index.php");
	//}
	//else if($_SESSION["role"] != 'student'){
	//	header("location: index.php");
	//}
	else if($row["role"] != 'student'){
		header("location: index.php");
	}
?>