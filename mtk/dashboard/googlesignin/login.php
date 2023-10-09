<?php
// Connect to your MySQL database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tkwfi";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the login request and authentication here
// Replace this with your actual authentication logic

$inputData = json_decode(file_get_contents('php://input'), true);

$emailOrUsername = $inputData['emailOrUsername'];
$password = $inputData['password'];

// Perform authentication by querying the database
$stmt = $conn->prepare("SELECT * FROM users WHERE (email = ? OR username = ?) AND password = ?");
$stmt->bind_param("sss", $emailOrUsername, $emailOrUsername, $password);

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    // Authentication success
    $response = ['success' => true];
} else {
    // Authentication failure
    $response = ['success' => false];
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>
