<?php
// Check if the requested URL is "localhost/mtk"
if ($_SERVER['REQUEST_URI'] == '/mtk/ads/') {
    // Redirect to the user page
    header('Location: index.php'); // Assuming user.php is the user page
    exit();
}
?>


