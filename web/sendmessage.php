<?php

require_once 'init.php';

$success = false;

// If this was a POST request, send message.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // If no fields are empty.
    if (!empty($_REQUEST['user']) && !empty($_REQUEST['subject']) && !empty($_REQUEST['message'])) {

        $messageSql = "insert into messages(user_id, subject, message) values('" . $_REQUEST['user'] . "','" .
            $_REQUEST['subject'] . "','" . $_REQUEST['message'] . "')"; // Vulnerable to SQL injection!

        // Message not sanitized! Arbitrary client-side code execution!
        $inserted = insertQuery($messageSql);
        if ($inserted === true) {
            $success = true;
        }
    }
}

// Get users from database.
$userSql  = "select id, firstname, surname from users";
$userList = getSelect($userSql);

// Build select box.
$select = "<select name=\"user\" class=\"form-control\" id=\"user\">";
foreach ($userList as $user) {
    $select .= "<option value='" . $user[0] . "'>" . $user[1] . " " . $user[2] . "</option>";
}
$select .= "</select>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clueless Inc. | Contact Us</title>
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
                <h2>Contact Us!</h2>
                <p>
                    Contact a member of staff here by filling out the form below and clicking the send message button!
                    We'll get back to you as soon as we can!
                </p>
                <?php
                    if ($success) {
                ?>
                        <div class="alert alert-success">Message sent successfully!</div>
                <?php
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="form" method="post">
                    <div class="form-group">
                        <label for="user">Recipient:</label>
                        <?= $select ?>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input class="form-control" name="subject" id="subject" />
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" rows="10" cols="50" name="message" id="message"></textarea>
                    </div>
                    <p class="text-right">
                        <input class="btn btn-success" type="submit" value="Send Message">
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
