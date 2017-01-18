<?php

require_once 'init.php';

// Authenticated users only!
protectPage();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clueless Inc. | Restricted Area!</title>
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
    <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                <h2>Welcome <span style="text-transform:capitalize"><?php echo $_SESSION['username']; ?></span>!</h2>
                <p>
                    This is a highly restricted area, but we know it's you because you typed the correct username and
                    password during login.
                </p>
                <p>
                    We ran this SQL to log you in:
                </p>
                <pre><?php echo $_SESSION['login_sql']; ?></pre>
                <p>
                    We secretly hate our customers, and overcharge them a lot of money. We're really wealthy though
                    because those suckers keep buying our product. Little do they know it'll fail on them after a year.
                </p>
                <p>
                    Just look at our profits this year:
                </p>
                <p class="text-center" style="font-size:50pt">
                    £134,564,234
                </p>
                <p>
                    Now download our entire customer database!
                </p>
                <p class="text-center">
                    <a class="btn btn-lg btn-danger" href="javascript:alert('Pwned!');"><i class="fa fa-download"></i> Download Database</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center text-muted">
                <small>Don't forget to <a href="/logout.php">log out!</a></small>
            </div>
        </div>
    </div>
</body>
</html>
