<?php
// Include configuration file
require_once 'config.php';

// Include User library file
require_once 'User.class.php';

if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var(GOOGLE_REDIRECT_URL, FILTER_SANITIZE_URL));
}

if(isset($_SESSION['token'])){
	$gClient->setAccessToken($_SESSION['token']);
}

if($gClient->getAccessToken()){
	// Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();
	


	
	// Initialize User class
	$user = new User();
	
	// Getting user profile info
	$gpUserData = array();
	$gpUserData['oauth_uid']  = !empty($gpUserProfile['id'])?$gpUserProfile['id']:'';
	$gpUserData['first_name'] = !empty($gpUserProfile['given_name'])?$gpUserProfile['given_name']:'';
	$gpUserData['last_name']  = !empty($gpUserProfile['family_name'])?$gpUserProfile['family_name']:'';
	$gpUserData['email'] 	  = !empty($gpUserProfile['email'])?$gpUserProfile['email']:'';
	$gpUserData['gender'] 	  = !empty($gpUserProfile['gender'])?$gpUserProfile['gender']:'';
	$gpUserData['locale'] 	  = !empty($gpUserProfile['locale'])?$gpUserProfile['locale']:'';
	$gpUserData['picture'] 	  = !empty($gpUserProfile['picture'])?$gpUserProfile['picture']:'';
	
	// Insert or update user data to the database
    $gpUserData['oauth_provider'] = 'google';
	$gpUserData['password'] = 'google';
	$gpUserData['firstname'] = $gpUserData['first_name'];
	$gpUserData['lastname'] = $gpUserData['last_name'];
	$gpUserData['fullname'] = $gpUserData['first_name'].' ' .$gpUserData['last_name'];
    $userData = $user->checkUser($gpUserData);
	
	// Storing user data in the session
	$_SESSION['userData'] = $userData;
	
	// Render user profile data
    if(!empty($userData)){
        $output	 = '<h2>Google Account Details</h2>';
		$output .= '<div class="ac-data">';
        $output .= '<img src="'.$userData['picture'].'">';
        $output .= '<p><b>Google ID:</b> '.$userData['oauth_uid'].'</p>';
        $output .= '<p><b>Full Name:</b> '.$userData['first_name'].' '.$userData['last_name'].'</p>';
        $output .= '<p><b>Email:</b> '.$userData['email'].'</p>';
        $output .= '<p><b>Gender:</b> '.$userData['gender'].'</p>';
        $output .= '<p><b>Locale:</b> '.$userData['locale'].'</p>';
		$output .= '<p><b>Proceed with the Registration </b> using your Google Account</p>';
        $output .= '<p><a href="http://localhost/mtk/dashboard/pages/gregister.php">Proceed</a></p>';
        $output .= '<p><a href="logout.php">Cancel</a></p>';
		$output .= '</div>';
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
}else{
	
	
	
	
	
	
	
	// Get login url
	$authUrl = $gClient->createAuthUrl();
	
	// Render google login button
	$output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'" class="login-btn g-signin2" data-onsuccess="onSignIn">Sign in with Google</a>';
}





?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login with Google using PHP</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts - Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet"> <!-- You can create a separate CSS file for your custom styles -->

</head>
<body>
<div class="container">
    <div class="wrapper">
        <!-- Display login button / Google profile information -->
        <?php echo $output; ?>
		<?php


?>

    </div>
</div>

<!-- Bootstrap JS and Popper.js (Required for Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
