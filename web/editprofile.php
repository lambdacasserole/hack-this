<?php

require_once 'init.php';

// Authenticated users only!
protectPage();

$success = false;

// If this was a POST request, process update.
if (isPostRequest()) {

    // If no fields are empty.
    if (noneAreEmpty('firstname', 'surname', 'email')) {

        $updateSql = "update users set firstname = '" . $_REQUEST['firstname'] . "', surname = '" . $_REQUEST['surname']
            . "', email='" . $_REQUEST['email'] . "' where id = " . $_SESSION['userid']; // Vulnerable to SQL injection!
        $updated = insertQuery($updateSql, true);

        // Record success or failure.
        if ($updated == true) {
            $success = true;
        }
    }
}

// Get logged in user.
$userSql = "select email, firstname, surname from users where id = " . $_SESSION['userid'];
$userList = getSelect($userSql);
$user = $userList[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clueless Inc. | Update Profile</title>
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
            <h2>Edit Your Profile</h2>
            <p>
                You can use the form below to edit your profile. All account-related emails will be sent to the address
                on file (these may contain sensitive data!).
            </p>
            <?php
                if ($success) {
            ?>
                <div class="alert alert-success">Details updated successfully!</div>
            <?php
                }
            ?>
            <form class="form" method="post">
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input class="form-control" name="firstname" id="firstname" value="<?= $user[1] ?>"/>
                </div>
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input class="form-control" name="surname" id="surname" value="<?= $user[2] ?>"/>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" name="email" id="email" value="<?= $user[0] ?>"/>
                </div>
                <br>
                <p class="text-right">
                    <input class="btn btn-success" type="submit" value="Save changes">
                </p>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center text-muted">
            <small>Go back <a href="/restricted.php">to your dashboard!</a></small>
        </div>
    </div>
</div>
</body>
</html>