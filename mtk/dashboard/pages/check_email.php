<?php
require "../admin/classes/DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {


$email = $_POST['email'];

// Check if the email already exists in the database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    echo "The E-Mail Account is already registered. Choose another Email to Create a new account or go to Login and choose forgot password to retrieve the account.";
	
} else {
    echo "available";
}

// Close connection
$conn->close();

?>
