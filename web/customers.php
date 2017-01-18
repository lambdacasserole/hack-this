<?php

require_once 'init.php';

// Try to get username and ID query parameters.
$getUser = tryGetRequestValue('username');
$getId = tryGetRequestValue('id');

$query = null;
$results = null;

// Get user by username or ID.
if ($getUser !== null) {
	$query   = "select * from users where username = '$getUser'"; // Vulnerable to SQL injection!
	$results = getSelect($query);
}
else if ($getId !== null) {
	$query   = "select * from users where id = $getId"; // Vulnerable to SQL injection!
    $results = getSelect($query);
}

?>

<html>
<head>
    <title>Clueless Inc. | Customer Database</title>
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
                <h2>Customer Database</h2>
                <p>
                    Welcome to the Clueless Inc. customer database. For security reasons, you can only search for one
                    user at a time. You may search by user ID or username.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form class="form" method="get">
                    <div class="form-group-lg">
                        <label for="id">User ID:</label>
                        <input class="form-control" name="id" id="id" type="text">
                    </div>
                    <br>
                    <p class="text-right">
                        <input class="btn btn-lg btn-success" type="submit" value="Search">
                    </p>
                </form>
            </div>
            <div class="col-md-6">
                <form class="form" method="get">
                    <div class="form-group-lg">
                        <label for="username">Username:</label>
                        <input class="form-control" name="username" id="username" type="text">
                    </div>
                    <br>
                    <p class="text-right">
                        <input class="btn btn-lg btn-success" type="submit" value="Search">
                    </p>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Query</h3>
                <p>
                    We helpfully executed the following query against the database:
                </p>
<?php

// Show query if we generated one.
if ($query !== null) {
    echo "<pre>$query</pre>";
}

?>
                <h3>Results</h3>
                <p>
                    Your query returned the following results.
                </p>
                <table class="table table-responsive table-striped table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                    </tr>
<?php

// If we got results, print user details.
if (!$results || !$query) {
    echo '<tr>';
    echo '<td colspan="6" class="text-center text-muted"><div style="margin:25px;">No results.</div></td>';
    echo '</tr>';
} else {
    foreach ($results as $row) {
        echo '<tr>';
        echo '<td>' . $row[0] . '</td>';
        echo '<td>' . $row[1] . '</td>';
        echo '<td>' . $row[2] . '</td>';
        echo '<td>' . $row[3] . '</td>';
        echo '<td>' . $row[4] . '</td>';
        echo '<td>' . $row[5] . '</td>';
        echo '</tr>';
    }
}

?>
                </table>
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
