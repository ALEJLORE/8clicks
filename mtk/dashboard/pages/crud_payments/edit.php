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
$result = mysqli_query($mysqli, "SELECT * FROM tbl_customers WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$username = $resultData['username'];
$fullname = $resultData['fullname'];
$phonenumber = $resultData['phonenumber'];
$email = $resultData['email'];
$address = $resultData['address'];
$password = $resultData['password'];
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
 <h2>Edit Data</h2>
    <p>
	<a href="index.php" class="btn btn-google btn-user "><i class="fas fa-fw fa-arrow-left"></i></a>
	    
    </p>
	
	<div class="container mt-4">
    <form name="edit" method="post" action="editAction.php">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $fullname; ?>" required>
            </div>
           <div class="col-md-6 mb-3">
                <label for="phonenumber" class="form-label">Phone Number</label>
                <input type="phonenumber" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $phonenumber; ?>" required>
            </div>

		   <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="address" class="form-control" id="address" name="address" value="<?php echo $address; ?>" required>
            </div>
			<div class="col-md-6 mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" required>
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


