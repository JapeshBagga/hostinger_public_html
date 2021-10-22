<?php

    //Include Google Client Library for PHP autoload file
    require_once 'vendor/autoload.php';
    
    //Make object of Google API Client for call Google API
    $google_client = new Google_Client();
    
    //Set the OAuth 2.0 Client ID
    $google_client->setClientId('894983861761-ef5u1amf0qj35h3uu7rqur8thrf5umlu.apps.googleusercontent.com');
    
    //Set the OAuth 2.0 Client Secret key
    $google_client->setClientSecret('CsgZzNRSqfUw27yJTkiWcILM');
    
    //Set the OAuth 2.0 Redirect URI
    // $google_client->setRedirectUri('http://jobaskit.com/eprep/leaderboard.php');
    
    //
    $google_client->addScope('email');
    
    $google_client->addScope('profile');

?>