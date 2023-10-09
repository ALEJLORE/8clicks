<?php
require "../admin/classes/DataBase.php";
session_start(); // Start a session

$db = new DataBase();
if ($db->dbConnect()) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

   

    <title>TKHOTSPOT - Login</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom fonts for this template-->
    <link href="http://localhost/mtk/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="http://localhost/mtk/dashboard/css/tk-admin-2.min.css" rel="stylesheet">
     

</head>
<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back! Admin</h1>
                                    </div>
                                    <form class="user" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <!-- ... Form fields ... -->
									
									
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="password" id="password"  placeholder="Password">
                                        </div>
										
									
										
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
										
										<button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
									
    
	
                                <?php
                                if (isset($_POST['email']) && isset($_POST['password'])) {
                                    if ($db->logIn("users", $_POST['email'], $_POST['password'])) {
                                        $_SESSION['email'] = $db->prepareData($_POST['email']);
                                        header("Location: index.php"); // Redirect to index.php
                                        exit(); // Terminate the script after the redirect
                                    } else {
                                        echo "Email or Password is Invalid";
                                    }
                                }
                                ?>
										
										
										
										
										
                                        <hr>
                                        <a href="http://localhost/mtk/api/google/" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="http://localhost/mtk/dashboard/index.php" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="http://localhost/mtk/dashboard/pages/forgot-password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="http://localhost/mtk/dashboard/pages/register.php">Create an Account!</a>
                                    </div>
                                </div>
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