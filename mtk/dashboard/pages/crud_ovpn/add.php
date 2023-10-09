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
                    <h1 class="h3 mb-4 text-gray-800">VPN-ROUTER REMOTE ACCESS</h1>
<h2>Add New VPN</h2>
	<p>
		<a href="index.php" class="btn btn-google btn-user "><i class="fas fa-fw fa-arrow-left"></i></a>
	</p>

	<div class="container mt-4">
    <form action="addAction.php" method="post" name="add">
        <div class="row">
		<strong><h7>Device Info:</h7></strong><hr>
            <div class="col-md-6 mb-3">
                <label for="devicename" class="form-label">Device Name</label>
                <input type="text" class="form-control" id="devicename" name="devicename" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="macaddress" class="form-label">Device MAC</label>
                <input type="text" class="form-control" id="macaddress" name="macaddress" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="ipaddress" class="form-label">Local IP Gateway</label>
                <input type="text" class="form-control" id="ipaddress" name="ipaddress" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="servicetype" class="form-label">Service Type</label>
                <input type="text" class="form-control" id="servicetype" name="servicetype" required>
            </div>
			 </div>
			 <br>
			
			<div class="row"> 
			<strong><h7>VPN:</h7></strong><hr>
		
			
			 <div class="col-md-6 mb-3">
                <label for="plan" class="form-label">Plan</label>
                <input type="text" class="form-control" id="plan" name="plan" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="connection" class="form-label">Connection</label>
                <input type="text" class="form-control" id="connection" name="connection" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="port" class="form-label">Port</label>
                <input type="text" class="form-control" id="port" name="port" required>
            </div>
			</div>
			 <br>
			<div class="row">
			 <strong><h7>User Profile:</h7></strong><hr>
			
			<div class="col-md-6 mb-3">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control" id="user" name="user" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
			
			<div class="col-md-6 mb-3">
                <label for="profile" class="form-label">Profile</label>
                <input type="text" class="form-control" id="profile" name="profile" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="confirmpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required>
            </div>
			</div>
			 <br>
			<div class="row">
			 <strong><h7>Service Type:</h7></strong><hr>
			<div class="col-md-6 mb-3">
                <label for="portservice" class="form-label">Service Port</label>
                <input type="text" class="form-control" id="portservice" name="portservice" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
			
            <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-primary">Add</button>
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

