<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php", true, 301);
}
?>


<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM vpn WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

	$devicename = $resultData['device_name'];
	$macaddress = $resultData['device_mac'];
	$ipaddress = $resultData['device_ip'];
	$servicetype = $resultData['port_service'];
	$plan = $resultData['vpn_plan_id'];
	$connection = $resultData['vpn_connection'];
	$port = $resultData['vpn_port_assigned'];
	$user = $resultData['vpn_username'];
	$password = $resultData['vpn_password'];
	$profile = $resultData['vpn_profile'];
	$portservice= $resultData['vpn_service_port'];
	$description = $resultData['description'];
	$status = $resultData['status'];


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
                    <h1 class="h3 mb-4 text-gray-800">VPN</h1>
 <h2>Edit Data</h2>
    <p>
	<a href="index.php" class="btn btn-google btn-user "><i class="fas fa-fw fa-arrow-left"></i></a>
	    
    </p>
	
	<div class="container mt-4">
    <form name="edit" method="post" action="editAction.php">
	
	 <div class="row">
		<strong><h7>Device Info:</h7></strong><hr>
            <div class="col-md-6 mb-3">
                <label for="devicename" class="form-label">Device Name</label>
                <input type="text" class="form-control" id="devicename" name="devicename" value="<?php echo $devicename; ?>" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="macaddress" class="form-label">Device MAC</label>
                <input type="text" class="form-control" id="macaddress" name="macaddress" value="<?php echo $macaddress; ?>" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="ipaddress" class="form-label">Local IP Gateway</label>
                <input type="text" class="form-control" id="ipaddress" name="ipaddress" value="<?php echo $ipaddress; ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="servicetype" class="form-label">Service Type</label>
                <input type="text" class="form-control" id="servicetype" name="servicetype" value="<?php echo $servicetype; ?>" required>
            </div>
			 </div>
			 <br>
			
			<div class="row"> 
			<strong><h7>VPN:</h7></strong><hr>
		
			
			 <div class="col-md-6 mb-3">
                <label for="plan" class="form-label">Plan</label>
                <input type="text" class="form-control" id="plan" name="plan" value="<?php echo $plan; ?>" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="connection" class="form-label">Connection</label>
                <input type="text" class="form-control" id="connection" name="connection" value="<?php echo $connection; ?>" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="port" class="form-label">Port</label>
                <input type="text" class="form-control" id="port" name="port" value="<?php echo $port; ?>" required>
            </div>
			</div>
			 <br>
			<div class="row">
			 <strong><h7>User Profile:</h7></strong><hr>
			
			<div class="col-md-6 mb-3">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control" id="user" name="user" value="<?php echo $user; ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" required>
            </div>
			
			<div class="col-md-6 mb-3">
                <label for="profile" class="form-label">Profile</label>
                <input type="text" class="form-control" id="profile" name="profile" value="<?php echo $profile; ?>" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="confirmpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="<?php echo $password; ?>" required>
            </div>
			</div>
			 <br>
			<div class="row">
			 <strong><h7>Service Type:</h7></strong><hr>
			<div class="col-md-6 mb-3">
                <label for="portservice" class="form-label">Service Port</label>
                <input type="text" class="form-control" id="portservice" name="portservice" value="<?php echo $portservice; ?>" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?php echo $description; ?>" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="<?php echo $status; ?>" required>
            </div>
			 <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="col-md-12">
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </div>
            
        </div>
	
	
	
	
       </form>
</div>

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


