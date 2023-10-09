<?php
require "../admin/classes/DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

   

    <title>TKHOTSPOT - Register</title>

    <?php require('../tools/header.php');?>  
		
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" onsubmit="return validatePassword(); checkEmailAvailability();" method="POST" action="">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="firstname" class="form-control form-control-user" id="firstname"
                                            placeholder="First Name"required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastname" class="form-control form-control-user" id="lastname"
                                            placeholder="Last Name" required>
                                    </div>
                                </div>
								<div class="form-group" style="display: none;">
    <input type="text" name="fullname" class="form-control form-control-user" id="fullname" placeholder="Full Name">
</div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="email"
                                        placeholder="Email Address" required>
										<style>
										#message {
											color: red;
											font-style: italic;
											font-size: smaller;
										}
									</style>
									<div id="message"></div>
                                </div>
								 
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="password" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="confirmpassword" class="form-control form-control-user"
                                            id="confirmpassword" placeholder="Confirm Password" required>
                                    </div>
                                </div>
								
								
		
								<button class="btn btn-primary btn-user btn-block" type="submit" value="Submit">Sign up</button>
	   <script>
        function clearMessage() {
            var message = document.getElementById("message");
            message.innerHTML = "";
        }

        function checkEmailAvailability() {
            var email = document.getElementById("email").value;
            var message = document.getElementById("message");

            // Clear the message if the email input is empty
            if (email === "") {
                message.innerHTML = "";
                return;
            }

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "check_email.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    if (xhr.responseText === "available") {
                        // No message is set when the email is available
                    } else {
                        message.innerHTML = "Email is already registered. Please use a different email.";
                    }
                }
            };
            xhr.send("email=" + email);
        }

        document.getElementById("email").addEventListener("blur", checkEmailAvailability);

        // Add event listeners to other input fields to clear the message when they receive focus
        document.getElementById("firstname").addEventListener("focus", clearMessage);
        document.getElementById("lastname").addEventListener("focus", clearMessage);
        document.getElementById("password").addEventListener("focus", clearMessage);
        document.getElementById("confirmpassword").addEventListener("focus", clearMessage);
    </script>
    
	<script>
			function validatePassword() {
            var password = document.getElementById("password").value;
            var confirmpassword = document.getElementById("confirmpassword").value;
            
            // Check if passwords match
            if (password !== confirmpassword) {
                alert("Passwords do not match!");
                return false;
            }
            
            // Check if password meets criteria (e.g., minimum length)
            if (password.length < 8) {
                alert("Password must be at least 8 characters long.");
                return false;
            }
            
            // Additional password criteria can be added here
            
            return true;
        }
    </script>
	


        <?php
		

		
        if (isset($_POST['fullname']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])) {
			// Get data from the form
// Merge the names
$fullname = $_POST['firstname'] . ' ' . $_POST['lastname'];
$email = $_POST['email'];    // Corrected key name to match form field
$password = $_POST['password'];    // Corrected key name to match form field
          if ($db->signUp("users", $fullname, $email, $password)) {
            echo "Signup Success: Go to <a href='http://localhost/mtk/dashboard/pages/login.php'>Login Page</a>";
            echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/mtk/dashboard/pages/login.php'; }, 3000);</script>";
          } else echo "Failed to complete signup";
        }
        ?>
								
        
								
								<hr>
								
								
                                <a href="http://localhost/mtk/api/google/" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
								
                                <a href="http://localhost/mtk/dashboard/index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="http://localhost/mtk/dashboard/pages/forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="http://localhost/mtk/dashboard/pages/login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

  <!-- Bootstrap core JavaScript-->
    <!-- Core plugin JavaScript-->
    <!-- Custom scripts for all pages-->
    <?php require('../tools/scripts.php');?>

</body>

</html>

<?php
}
?>