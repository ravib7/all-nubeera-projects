<?php

//client id and secret key from demo1-project, oauth 2.0 name-web client 2

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('51098781208-v31vplvldfqag2lb5td7lsjvh98ojn2u.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri("http://localhost/nubeera.com/polling.nubeera.com/02.Registration.php");

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');
// 919717845384-ng5g4em1ujdvlcptl41nrgam4maej8n0.apps.googleusercontent.com
//699466001074-s9r3as77p7a9jkvk1af9iblaeueddci4.apps.googleusercontent.com
// http://localhost/Polling.com/03.login.php    iT4ZqzOni8_JlmEJM-Bvqfpz
?> 