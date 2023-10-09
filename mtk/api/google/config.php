<?php
// Google API configuration
define('GOOGLE_CLIENT_ID', '526540810459-2d6qv3tl5593mel4fn1hv018ef35seli.apps.googleusercontent.com');  
define('GOOGLE_CLIENT_SECRET', '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'); 
define('GOOGLE_REDIRECT_URL', 'http://localhost/mtk/api/google/'); 

// Database configuration
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'tkwfi'); 
define('DB_USER_TBL', 'users');

// Start session
if(!session_id()){
    session_start();
}

// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to TKHOTSPOT');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_oauthV2 = new Google_Oauth2Service($gClient);