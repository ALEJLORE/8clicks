<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php", true, 301);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    

    <title>TKHOTSPOT -PLANS</title>

    <?php require('../tools/header.php');?>  

</head>

<body id="page-top">

     <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php require('../tools/sidebar.php');?>
	   <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                

                    <!-- Topbar Navbar -->
                    <?php require('../tools/topbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Customer</h1>
  <section class="u-clearfix u-section-1">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="display-4">Home and Business Plans</h1>
            <p class="lead">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo
                sagittis suscipit ultrices.</p>
			 <!-- HOME Plans -->	
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-5">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">PLAN 599</h5>
                            <h2 class="card-text">Php 599</h2>
							<h2 class="card-text">HOME</h2>
                            <p class="card-text">15 Users <br>Feature 2 <br>Feature 3 <br>Feature 4</p>
                            <a href="http://localhost/mtk/dashboard/index.php"
                                class="btn btn-primary">get plan</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">PLAN 699</h5>
                            <h2 class="card-text">Php 699</h2>
							<h2 class="card-text">HOME</h2>
                            <p class="card-text">15 Users <br>Feature 2 <br>Feature 3 <br>Feature 4</p>
                            <a href="http://localhost/mtk/dashboard/index.php" class="btn btn-primary">get plan</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">PLAN 799</h5>
                            <h2 class="card-text">Php 799</h2>
							<h2 class="card-text">HOME</h2>
                            <p class="card-text">15 Users <br>Feature 2 <br>Feature 3 <br>Feature 4</p>
                            <a href="http://localhost/mtk/dashboard/index.php" class="btn btn-primary">get plan</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">PLAN 899</h5>
                            <h2 class="card-text">Php 899</h2>
							<h2 class="card-text">HOME</h2>
                            <p class="card-text">15 Users <br>Feature 2 <br>Feature 3 <br>Feature 4</p>
                            <a href="http://localhost/mtk/dashboard/index.php" class="btn btn-primary">get plan</a>
                        </div>
                    </div>
                </div>
				 <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">PLAN 999</h5>
                            <h2 class="card-text">Php 999</h2>
							<h2 class="card-text">HOME</h2>
                            <p class="card-text">15 Users <br>Feature 2 <br>Feature 3 <br>Feature 4</p>
                            <a href="http://localhost/mtk/dashboard/index.php" class="btn btn-primary">get plan</a>
                        </div>
                    </div>
                </div>
            </div>
        
		 <!-- Premium Plans -->	
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-5">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">PLAN 999</h5>
                            <h2 class="card-text">Php 999</h2>
							<h2 class="card-text">PREMIUM</h2>
                            <p class="card-text">15 Users <br>Feature 2 <br>Feature 3 <br>Feature 4</p>
                            <a href="https://nicepage.com/k/radio-website-templates"
                                class="btn btn-primary">get plan</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">PLAN 1999</h5>
                            <h2 class="card-text">Php 1999</h2>
								<h2 class="card-text">PREMIUM</h2>
                            <p class="card-text">15 Users <br>Feature 2 <br>Feature 3 <br>Feature 4</p>
                            <a href="http://localhost/mtk/dashboard/index.php" class="btn btn-primary">get plan</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">PLAN 2999</h5>
                            <h2 class="card-text">Php 2999</h2>
							<h2 class="card-text">PREMIUM</h2>
                            <p class="card-text">15 Users <br>Feature 2 <br>Feature 3 <br>Feature 4</p>
                            <a href="http://localhost/mtk/dashboard/index.php" class="btn btn-primary">get plan</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">PLAN 3999</h5>
                            <h2 class="card-text">Php 3999</h2>
							<h2 class="card-text">PREMIUM</h2>
                            <p class="card-text">15 Users <br>Feature 2 <br>Feature 3 <br>Feature 4</p>
                            <a href="http://localhost/mtk/dashboard/index.php" class="btn btn-primary">get plan</a>
                        </div>
                    </div>
                </div>
				 <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">PLAN 4999</h5>
                            <h2 class="card-text">Php 4999</h2>
							<h2 class="card-text">PREMIUM</h2>
                            <p class="card-text">15 Users <br>Feature 2 <br>Feature 3 <br>Feature 4</p>
                            <a href="http://localhost/mtk/dashboard/index.php" class="btn btn-primary">get plan</a>
                        </div>
                    </div>
                </div>
            </div>
        
		</div>
    </section>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

             <!-- Footer -->
            <?php require('../tools/footer.php');?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php require('../tools/scroll.php');?>

    <!-- Logout Modal-->
    <?php require('../tools/logout.php');?>

    <!-- Bootstrap core JavaScript-->
    <!-- Core plugin JavaScript-->
    <!-- Custom scripts for all pages-->
    <?php require('../tools/scripts.php');?>

</body>

</html>