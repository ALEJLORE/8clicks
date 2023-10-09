// Include Google Sign-In script
<script src="https://apis.google.com/js/platform.js" async defer></script>

// Initialize Google Sign-In
gapi.load('auth2', function () {
    gapi.auth2.init({
        client_id: '526540810459-2d6qv3tl5593mel4fn1hv018ef35seli.apps.googleusercontent.com',
    });
});

// Function to handle Google Sign-In success
function onSignIn(googleUser) {
    // Get user data
    var profile = googleUser.getBasicProfile();
    var id_token = googleUser.getAuthResponse().id_token;
    
    // Send the Google ID token to the server for verification
    verifyGoogleIdToken(id_token);
}

function verifyGoogleIdToken(id_token) {
    // Make an AJAX request to the PHP backend for token verification
    // Here, you'll send the 'id_token' to the server for validation

    fetch('google_login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ id_token }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Redirect or perform actions upon successful Google Sign-In
            window.location.href = 'http://localhost/mtk/'; // Replace with your desired destination
        } else {
            alert('Google Sign-In failed. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
