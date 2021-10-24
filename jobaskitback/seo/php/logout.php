<?php



  
  //Include Google Client Library for PHP autoload file
  require_once '../vendor/autoload.php';

  //Make object of Google API Client for call Google API
  $google_client = new Google_Client();

  //Set the OAuth 2.0 Client ID
  $google_client->setClientId('284820003945-uso7m2qgq9437k4am69b5m7otqlbi7j6.apps.googleusercontent.com');

  //Set the OAuth 2.0 Client Secret key
  $google_client->setClientSecret('shwsZzy36MT8P0NmGKppKvmn');

  //Set the OAuth 2.0 Redirect URI
  // $google_client->setRedirectUri('http://localhost/makosInternShip/seo/secretsignup.php');

  //
  $google_client->addScope('email');

  $google_client->addScope('profile');

  //start session on web page
  if(!isset($_SESSION)) { 
    session_start(); 
  } 
  // session_start();
  // session_destroy();
  // include('connection.php');

  //Reset OAuth access token
  $google_client->revokeToken();

  //Destroy entire session data.
  session_destroy();

  //redirect page to index.php
  // header('location:index.php');
  header("Location: ../login.php");
  
?>