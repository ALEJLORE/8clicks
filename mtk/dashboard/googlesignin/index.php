<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-kz0luZ9vraeNPmSK8vB4eTqN2PwJw1R5RHjbqzF/qnqFHEm1CQFA5bPm65h/I5rj2" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form id="loginForm" method="POST">
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Email or Username</label>
                                <input type="text" class="form-control" id="inputEmail" name="inputEmail" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
                            </div>
                            <button type="submit" class="btn btn-primary"><div class="g-signin2" data-onsuccess="onSignIn">Sign-In</div></button>
							<!-- ... -->

<!-- Add a Google Sign-In button -->

							<!-- Your existing login form -->


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
