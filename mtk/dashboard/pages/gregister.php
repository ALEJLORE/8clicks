<?php
require "../admin/classes/DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>TKHOTSPOT - Register</title>

    <?php require('../tools/header.php'); ?>  
		
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
                            <?php
                            session_start();

                            // Access a session variable
                            $userData = $_SESSION['userData'];

                            // Use the session data

                            ?>
                            <form class="user" onsubmit="return validatePassword(); " action="" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="firstname" class="form-control form-control-user" id="firstname"
                                            placeholder="First Name" value="<?php echo $userData['first_name']; ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastname" class="form-control form-control-user" id="lastname"
                                            placeholder="Last Name" value="<?php echo $userData['last_name']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group" style="display: none;">
                                    <input type="text" name="fullname" class="form-control form-control-user" id="fullname" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="email"
                                        placeholder="Email Address" value="<?php echo $userData['email']; ?>" autofocus>
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
                               
								<button class="btn btn-primary btn-user btn-block" type="submit" name="submit" id="submitBtn" value="Submit">Sign up</button>
								
								<hr>
								
								
                                <a href="http://localhost/mtk/api/google/" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register New Email with Google
                                </a>
								
                                <a href="http://localhost/mtk/dashboard/index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
  
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
                                if (isset($_POST['submit'])) {
                                    // Get data from the form
                                    $fullname = $_POST['firstname'] . ' ' . $_POST['lastname'];
                                    $email = $_POST['email']; // Corrected key name to match form field
                                    $password = $_POST['password']; // Corrected key name to match form field

                                    if ($db->updateReg("users", $fullname, $email, $password)) {
										
										
										// Insert user data in the database: Disabled because the user need to have a successful signup before saving the gmail to database
				
										
                                        echo "Signup Success: Go to <a href='http://localhost/mtk/dashboard/pages/login.php'>Login Page</a>";
                                        echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/mtk/dashboard/pages/login.php'; }, 3000);</script>";
                                    } else {
                                        echo "Failed to complete signup";
                                    }
                                }
                                ?>
							
								
                            </form>
                            <hr>
                            <div class="text-center">
							
                                <a class="small" href="http://localhost/mtk/dashboard/pages/forgot-password.php?newemail=forgotemail"> Forgot Password?</a>
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
