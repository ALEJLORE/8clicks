<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php", true, 301);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    

    <title>TKHOTSPOT - Port Tester</title>

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
                    <h1 class="h3 mb-4 text-gray-800">System Users</h1>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MikroTik Port Tester</title>
</head>

<body>
    <h1>MikroTik Port Tester</h1>
    <p>Enter the IP address to test port 8728:</p>
    <input type="text" id="ipAddress" placeholder="Enter IP address">
    <button onclick="testPort()">Test Port</button>
    <p id="result"></p>

    <script>
        function testPort() {
            var ipAddress = document.getElementById("ipAddress").value;
            var port = 8728;
            var resultDisplay = document.getElementById("result");

            resultDisplay.innerHTML = "Testing...";

            var xhr = new XMLHttpRequest();
            xhr.open("GET", "http://" + ipAddress + ":" + port, true);
            xhr.timeout = 5000; // 5 seconds timeout

            xhr.onload = function () {
                if (xhr.status === 200) {
                    resultDisplay.innerHTML = "Port 8728 is open on " + ipAddress;
                } else {
                    resultDisplay.innerHTML = "Port 8728 is closed on " + ipAddress;
                }
            };

            xhr.ontimeout = function () {
                resultDisplay.innerHTML = "Timeout: Unable to connect to " + ipAddress + " on port 8728";
            };

            xhr.onerror = function () {
                resultDisplay.innerHTML = "Error: Unable to connect to " + ipAddress + " on port 8728";
            };

            xhr.send();
        }
    </script>
</body>

</html>

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