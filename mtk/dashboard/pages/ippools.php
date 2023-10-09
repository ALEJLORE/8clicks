<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php", true, 301);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    

    <title>TKHOTSPOT - IP POOLS</title>

    <?php require('../tools/header.php');?>  

</head>

<body id="page-top">

<!-- Add/Edit Record Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Add/Edit Record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="poolName" class="form-label">Pool Name:</label>
                    <input type="text" class="form-control" id="poolName">
                </div>
                <div class="mb-3">
                    <label for="rangeIP" class="form-label">Range IP:</label>
                    <input type="text" class="form-control" id="rangeIP">
                </div>
                <div class="mb-3">
                    <label for="routers" class="form-label">Routers:</label>
                    <input type="text" class="form-control" id="routers">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveButton">Save</button>
            </div>
        </div>
    </div>
</div>
<script>
// Function to show form modal for adding or updating records
function showFormModal() {
    // Clear input fields
    document.getElementById('poolName').value = '';
    document.getElementById('rangeIP').value = '';
    document.getElementById('routers').value = '';

    // Show the modal
    const formModal = new bootstrap.Modal(document.getElementById('formModal'));
    formModal.show();

    // Handle save button click event
    document.getElementById('saveButton').addEventListener('click', function() {
        const poolName = document.getElementById('poolName').value;
        const rangeIP = document.getElementById('rangeIP').value;
        const routers = document.getElementById('routers').value;

        // Create a data object to send to the server
        const data = {
            poolName: poolName,
            rangeIP: rangeIP,
            routers: routers
        };

        // Send a POST request to your server-side endpoint
        fetch('/api/addRecord', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(result => {
            // Handle the response from the server (e.g., show success message, close modal)
            console.log(result); // Log the server response (for debugging)
            formModal.hide(); // Close the modal
        })
        .catch(error => {
            // Handle errors (e.g., show error message)
            console.error('Error:', error);
        });
    });
}


</script>

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
                   <div class="container mt-5">
        <h2>IP Address Pools</h2>
        <div class="mb-3">
            <button class="btn btn-primary" onclick="addRecord()">Add Record</button>
            <button class="btn btn-success" onclick="updateRecord()">Update Record</button>
            <button class="btn btn-danger" onclick="deleteRecord()">Delete Record</button>
			<button type="button" class="btn btn-primary" id="addButton">Add</button>
			<button type="button" class="btn btn-primary" id="updateButton">Update</button>

        </div>
        <table class="table" id="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pool Name</th>
                    <th>Range IP</th>
                    <th>Routers</th>
                </tr>
            </thead>
            <tbody>
                <!-- Here, you would use server-side scripting (like PHP, Python, etc.) to fetch data from your database and populate the table dynamically -->
                <?php
                // Sample PHP code to fetch data from the database and populate the table
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "tkwfi";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT id, pool_name, range_ip, routers FROM tbl_pool";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["pool_name"] . "</td><td>" . $row["range_ip"] . "</td><td>" . $row["routers"] . "</td></tr>";
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
                <!-- End of dynamic data population -->
            </tbody>
        </table>
    </div>

    <!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="successModalBody">
    <!-- Success message will be displayed here -->
    <p id="successMessage"></p>
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-secondary" id="closeModalButton">
            <i class="bi bi-x-circle"></i> Close
        </button>
    </div>
</div>

        </div>
    </div>
</div>


    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        // Function to load data into the table
        function loadData() {
            // Fetch data from the server-side script (PHP in this case)
            fetch('fetch_data.php')
                .then(response => response.json())
                .then(data => {
                    // Populate the table with fetched data
                    const tableBody = document.getElementById('data-table').getElementsByTagName('tbody')[0];
                    tableBody.innerHTML = ''; // Clear existing table rows
                    data.forEach(record => {
                        tableBody.innerHTML += `<tr><td>${record.id}</td><td>${record.pool_name}</td><td>${record.range_ip}</td><td>${record.routers}</td></tr>`;
                    });
                });
        }
		  </script>
  <script>
  // Get the add and update buttons by their IDs
const addButton = document.getElementById('addButton');
const updateButton = document.getElementById('updateButton');

// Bind the showFormModal function to the click event of the Add button
addButton.addEventListener('click', function() {
    showFormModal();
});

// Bind the showFormModal function to the click event of the Update button
updateButton.addEventListener('click', function() {
    showFormModal();
});

  
     // Function to show success modal with a custom message
function showSuccessModal(message) {
    const successModal = new bootstrap.Modal(document.getElementById('successModal'), {
        backdrop: 'static' // Prevents modal from closing when clicking outside
    });
    document.getElementById('successMessage').innerText = message;
    successModal.show();

    // Close the modal when the close button is clicked
    document.getElementById('closeModalButton').addEventListener('click', function() {
        successModal.hide();
    });
}




        // Function to add a new record
        function addRecord() {
            const poolName = prompt("Enter Pool Name:");
            const rangeIP = prompt("Enter Range IP:");
            const routers = prompt("Enter Routers:");

            if (poolName && rangeIP && routers) {
                // Send data to the server-side script for insertion
                fetch('add_record.php', {
                    method: 'POST',
                    body: JSON.stringify({ poolName, rangeIP, routers }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                    showSuccessModal(data.message);
                    loadData();
                });
            }
        }

        // Function to update an existing record
        function updateRecord() {
            const id = prompt("Enter ID of the record to update:");
            const poolName = prompt("Enter Updated Pool Name:");
            const rangeIP = prompt("Enter Updated Range IP:");
            const routers = prompt("Enter Updated Routers:");

            if (id && poolName && rangeIP && routers) {
                // Send data to the server-side script for updating
                fetch('update_record.php', {
                    method: 'POST',
                    body: JSON.stringify({ id, poolName, rangeIP, routers }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                    showSuccessModal(data.message);
                    loadData();
                });
            }
        }

        // Function to delete an existing record
        function deleteRecord() {
            const id = prompt("Enter ID of the record to delete:");

            if (id) {
                // Send data to the server-side script for deletion
                fetch('delete_record.php', {
                    method: 'POST',
                    body: JSON.stringify({ id }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                    showSuccessModal(data.message);
                    loadData();
                });
            }
        }

        // Load data when the page is loaded
        window.onload = loadData;
    </script>
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