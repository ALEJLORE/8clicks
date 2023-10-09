<?php
// Verify the Google ID token on the server
$id_token = json_decode(file_get_contents('php://input'), true)['id_token'];

// Verify the ID token using the Google API Client Library
require_once 'http://localhost/mtk/api/to/google-api-php-client-main/vendor/autoload.php'; // Replace with the actual path
$client = new Google_Client(['client_id' => '526540810459-2d6qv3tl5593mel4fn1hv018ef35seli.apps.googleusercontent.com']);
$payload = $client->verifyIdToken($id_token);

if ($payload) {
    // The ID token is valid, and you can authenticate the user
    // You can check $payload for user information
    $email = $payload['email'];
    // ... Perform your user authentication or registration logic here ...
    
    // For demonstration purposes, let's assume a successful login/registration
    $response = ['success' => true];
} else {
    // Invalid ID token
    $response = ['success' => false];
}

header('Content-Type: application/json');
echo json_encode($response);
?>
