
<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM system_users ORDER BY id DESC");
?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php", true, 301);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    

    <title>TKHOTSPOT - SYSTEM USERS</title>

    <?php require('../../tools/header.php');?>  
	<!-- Include Bootstrap CSS (if not already included) -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https:////cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
	 <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" async defer></script>
	 <link href="DataTables/datatables.min.css" rel="stylesheet">
	 <script src="DataTables/datatables.min.js"></script>

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
                    <h1 class="h3 mb-4 text-gray-800">System Users</h1>
<p>
		
		 <a href="add.php" class="btn btn-google btn-user "><i class="fas fa-fw fa-plus"></i></a>
	</p>
	<div class="container mt-4">
	<script>let table = new DataTable('#myTable');</script>
    <table class="table table-bordered table-striped" id="myTable">
        <thead class="table-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch the next row of a result set as an associative array
            while ($res = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$res['name']."</td>";
                echo "<td>".$res['age']."</td>";
                echo "<td>".$res['email']."</td>";   
                echo "<td><a href=\"edit.php?id=$res[id]\" class='btn btn-primary btn-sm'>Edit</a> | 
                <a href=\"delete.php?id=$res[id]\" class='btn btn-danger btn-sm' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>




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


