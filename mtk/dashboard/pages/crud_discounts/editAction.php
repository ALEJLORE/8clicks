<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php", true, 301);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    

    <title>TKHOTSPOT - CONTACTS</title>

    <?php require('../../tools/header.php');?>  

</head>

<body id="page-top">

     <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php require('../../tools/sidebar.php');?>
	   <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                

                    <!-- Topbar Navbar -->
                    <?php require('../../tools/topbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">CONTACTS</h1>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$fullname = mysqli_real_escape_string($mysqli, $_POST['fullname']);
	$phonenumber = mysqli_real_escape_string($mysqli, $_POST['phonenumber']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	
	// Check for empty fields
	if (empty($username) || empty($fullname) || empty($phonenumber) || empty($email) || empty($address) || empty($password)) {
		if (empty($username)) {
			echo "<font color='red'>User Name field is empty.</font><br/>";
		}
		
		if (empty($fullname)) {
			echo "<font color='red'>Full Name field is empty.</font><br/>";
		}
		if (empty($phonenumber)) {
			echo "<font color='red'>Phone Number field is empty.</font><br/>";
		}
		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if (empty($address)) {
			echo "<font color='red'>Address field is empty.</font><br/>";
		}
		
		if (empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE tbl_customers SET `username` = '$username', `fullname` = '$fullname', `phonenumber` = '$phonenumber', `email` = '$email' , `address` = '$address', `password` = '$password' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View List</a>";
	}
}
?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

             <!-- Footer -->
            <?php require('../../tools/footer.php');?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php require('../../tools/scroll.php');?>

    <!-- Logout Modal-->
    <?php require('../../tools/logout.php');?>

    <!-- Bootstrap core JavaScript-->
    <!-- Core plugin JavaScript-->
    <!-- Custom scripts for all pages-->
    <?php require('../../tools/scripts.php');?>

</body>

</html>
