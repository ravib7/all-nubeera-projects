<?php

//client id and secret key from demo1-project, oauth 2.0 name-for nubeera live project

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once '../../vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('51098781208-0a0knqd9thgbgf0et7p7q0si3pu3i5r8.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri("http://localhost/nubeera.com/live.nubeera.com/signup.php");

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 