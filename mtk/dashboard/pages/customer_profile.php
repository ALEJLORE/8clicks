<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php", true, 301);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    

    <title>TKHOTSPOT - Customer Profile</title>

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
<!-- Add the following form inside the <div id="profile-form"></div> element in index.html -->
<div class="container">
        <h1>Customer Profile</h1>
        <div id="profile-form"></div>
    </div>
<form id="profile-form">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <!-- Add other input fields for password, pppoe_password, fullname, address, phonenumber, email, balance, auto_renewal -->

    <label for="profile-photo">Profile Photo:</label>
    <input type="file" id="profile-photo" name="profilePhoto">

    <button type="submit">Update Profile</button>
</form>
<script>
const profileForm = document.getElementById("profile-form");
const fileInput = document.getElementById("profile-photo");

function fetchProfile() {
    // Implement Fetch request to get customer profile data from API (GET request to api.php)
    fetch("api.php")
        .then(response => response.json())
        .then(data => {
            renderProfileForm(data);
        })
        .catch(error => {
            console.error("Error fetching profile data:", error);
        });
}

function updateProfile(data) {
    // Implement Fetch request to update customer profile data to API (POST request to api.php)
    fetch("api.php", {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
            "Content-Type": "application/json"
        }
    })
    .then(response => response.json())
    .then(data => {
        // Handle response after updating profile data
        console.log("Profile updated successfully:", data);
        // You can update the UI or show a success message here
    })
    .catch(error => {
        console.error("Error updating profile data:", error);
        // Handle errors and show an error message to the user
    });
}

function renderProfileForm(profileData) {
    // Populate the form fields with profileData
    document.getElementById("username").value = profileData.username;
    // Populate other form fields similarly

    // Update the UI for profile photo (if available)
    if (profileData.profilePhotoUrl) {
        const profilePhotoElement = document.getElementById("profile-photo-preview");
        profilePhotoElement.src = profileData.profilePhotoUrl;
        profilePhotoElement.style.display = "block";
    }
}

profileForm.addEventListener("submit", function(event) {
    event.preventDefault();
    const formData = new FormData(profileForm);
    const data = {
        username: formData.get("username"),
        password: formData.get("password"),
        // ... extract other form fields similarly
    };
    updateProfile(data);
});

fileInput.addEventListener("change", function(event) {
    const file = event.target.files[0];
    const formData = new FormData();
    formData.append("profilePhoto", file);

    // Implement code to handle file upload using fetch API (POST request)
    fetch("upload.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Handle response after uploading profile photo
        console.log("Profile photo uploaded successfully:", data);
        // Update the UI with the uploaded profile photo (if available)
        if (data.profilePhotoUrl) {
            const profilePhotoElement = document.getElementById("profile-photo-preview");
            profilePhotoElement.src = data.profilePhotoUrl;
            profilePhotoElement.style.display = "block";
        }
    })
    .catch(error => {
        console.error("Error uploading profile photo:", error);
        // Handle errors and show an error message to the user
    });
});

// Fetch profile data when the page loads
fetchProfile();

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