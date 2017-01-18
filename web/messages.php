<?php

require_once 'init.php';

// Authenticated users only!
protectPage();

// Get all messages for user.
$messageSql = 'select * from messages where user_id = ' . $_SESSION['userid'];
$messages = getSelect($messageSql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clueless Inc. | Our Product</title>
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
            <h2>Your Inbox</h2>
            <p>
                See messages customers have sent you below!
            </p>
            <table class="table table-responsive table-striped table-bordered">
                <tr>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
            <?php

                // Show messages.
                if(!empty($messages) && is_array($messages)) {
                    foreach($messages as $message) {
                        echo "<tr><td>" . $message[2] . "</td><td>" . $message[3] . "</td></tr>";
                    }
                }

            ?>
            </table>
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
