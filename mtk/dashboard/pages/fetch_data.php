<?php
$servername = "localhost";
                $username = "username";
                $password = "password";
                $dbname = "tkwfi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, pool_name, range_ip, routers FROM tbl_pool";
$result = $conn->query($sql);
$data = [];

if ($result->num_rows > 0) {
    // Fetch data from the database
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
?>
