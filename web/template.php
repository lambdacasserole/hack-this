<?php

require_once 'init.php';

// Load the file we specified.
$file = $_GET['load'];

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
    <?php

        /** @noinspection PhpIncludeInspection */
        require_once __DIR__ . '/templates/' . $file;

    ?>
    <div class="row">
        <div class="col-md-12 text-center text-muted">
            <small>Back to <a href="/">Hack This!</a></small>
        </div>
    </div>
</div>
</body>
</html>