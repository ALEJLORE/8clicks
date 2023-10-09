<?php
$mysqli = new mysqli("localhost", "username", "password", "customerdb");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Handling GET request to fetch customer profile data
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $sql = "SELECT * FROM tbl_customers";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $profileData = [
            "username" => $row["username"],
            "password" => $row["password"],
            // ... extract other fields similarly
        ];
        // You can also fetch the profile photo URL from the server and add it to $profileData
        // Example: $profileData["profilePhotoUrl"] = $row["profile_photo_url"];
        echo json_encode($profileData);
    } else {
        echo json_encode(["error" => "No data found"]);
    }

    $result->close();
}

// Handling POST request to update customer profile data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    $username = $mysqli->real_escape_string($data["username"]);
    $password = $mysqli->real_escape_string($data["password"]);
    // ... escape and handle other fields similarly

    $sql = "UPDATE tbl_customers SET password='$password' WHERE username='$username'";

    if ($mysqli->query($sql) === TRUE) {
        echo json_encode(["success" => "Profile updated successfully"]);
    } else {
        echo json_encode(["error" => "Error updating profile: " . $mysqli->error]);
    }
}

$mysqli->close();
?>
