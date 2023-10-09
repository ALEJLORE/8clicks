<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tkwfi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"));
$id = $data->id;
$poolName = $data->poolName;
$rangeIP = $data->rangeIP;
$routers = $data->routers;

$sql = "UPDATE tbl_pool SET pool_name='$poolName', range_ip='$rangeIP', routers='$routers' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array('message' => 'Record updated successfully'));
} else {
    echo json_encode(array('message' => 'Error: ' . $conn->error));
}

$conn->close();
?>
