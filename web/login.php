<?php

require_once 'init.php';

// If we're already logged in go to restricted page.
if (isAuthenticated()) {
    redirectToRestrictedPage();
}

// Has login failed?
$failed = false;

// SQL used for checking credentials.
$sql = '';

// If this is a POST request, login was attempted.
if (isPostRequest()) {

    // Run SQL to check if user is in database.
    $sql = "select * from users where username = '" . $_REQUEST['username'] . "' and password = '"
        . $_REQUEST['password'] . "'"; // Vulnerable to SQL injection!
    $authenticated = getSelect($sql);

    // Check if we found a user with matching username and password.
    if (!$authenticated) {
        $failed = true;
    }
    else {
        // Remember user in session.
        $_SESSION['login_sql'] = $sql;
        $_SESSION['authed'] = true;
        $_SESSION['userid'] = $authenticated[0][0];
        $_SESSION['username'] = $authenticated[0][1];

        // Redirect to restricted page.
        redirectToRestrictedPage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clueless Inc. | Login</title>
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Encoding -->
    <meta charset="utf-8">
    <!-- Metadata -->
    <meta name="description" content="SQL injection customer database example.">
    <meta name="author" content="Saul Johnson">
    <!-- Styles -->
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="/img/logos/clueless.svg" style="margin:50px;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Restricted!</h2>
            <p>
                We take the security of our customer information <b>extremely</b> seriously. To access our customer
                database, please log in below.
            </p>
            <?php
                if ($failed) {
            ?>
                    <div class="alert alert-danger">Login failed!</div>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form" method="post">
                <div class="form-group-lg">
                    <label for="username">Username:</label>
                    <input class="form-control" name="username" id="username" type="text">
                </div>
                <br>
                <div class="form-group-lg">
                    <label for="password">Password:</label>
                    <input class="form-control" name="password" id="password" type="password">
                </div>
                <br>
                <p class="text-right">
                    <input class="btn btn-success" type="submit" value="Login!">
                </p>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center text-muted">
            <small>Back to <a href="/">Hack This!</a></small>
        </div>
    </div>
</div>
</body>
</html>
