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
$password = $_SESSION["password"];
$role = $_SESSION["role"];
$query = "select user_id, first_name, last_name, email, password, role from user where (email='$email' and password='$password' and role='hod')";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$_SESSION["name"] = $row["first_name"]." ".$row["last_name"];
$user_id = $row["user_id"];

if(empty($email) || empty($password)){
	header("location: ../index.php");
}
else if($_SESSION["email"] != $row["email"]){
	header("location: ../index.php");
}
else if($password != $row["password"]){
	header("location: ../index.php");
}
else if($_SESSION["role"] != 'hod'){
	header("location: ../index.php");
}
else if($row["role"] != 'hod'){
	header("location: ../index.php");
}
?>