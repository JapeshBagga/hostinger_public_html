<?php
    $servername = "database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com";
	$username = "admin";
	$password = "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou";	
	$conn = new mysqli($servername, $username, $password,'demodashboard');
	$jobconn = new mysqli($servername, $username, $password,'jobaskit');
		// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	if ($jobconn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('683967459357-st4a3h1rokjqnht8popsd2ft6orja18j.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('kDhavhFOn9Ucp13mjpisEsya');

//Set the OAuth 2.0 Redirect URI
// $google_client->setRedirectUri('http://localhost/makosInternShip/seo/secretsignup.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
if(!isset($_SESSION)) { 
	session_start(); 
  } 

   ?>