<?php

require_once 'db_configuration.php';

/**
 * Holds the connection used to interact with the database.
 *
 * @var mysqli
 */
$connection = null;

/**
 * Initialises the database connection.
 */
function connect()
{
    // Import global.
    global $connection;

    // Try to establish connection.
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DB);

    // Connection failed.
    if (!$connection) {
        die("Unable to connect to: " . DB_USER . ":" . DB_PASS . "@" . DB_HOST . ". Error: " . mysqli_error($connection));
    }

    // Select database.
    selectDatabase();
}

/**
 * Selects the configured database.
 */
function selectDatabase()
{
    global $connection;

    // If we're connected, select the database.
    if($connection !== null) {
        mysqli_select_db($connection, DB_DB);
    }
}

/**
 * Performs a select query on the database.
 *
 * @param string $query the query to execute
 * @return array
 */
function getSelect($query)
{
    global $connection;

    // Connect if we're not connected already.
    if($connection === null) {
        connect();
    }

    // If we connected successfully.
    if(is_object($connection)) {

        // Run a multi-query (this will allow SQL injection).
        mysqli_multi_query($connection, $query);
        $result = mysqli_store_result($connection);

        // If we got a result, fetch all rows.
        if($result !== null && is_object($result)) {
            $rows = array();
            while($row = mysqli_fetch_row($result)) {
                $rows[] = $row;
            }
            return $rows;
        }
    }
}

/**
 * Performs an insert or update query on the database.
 *
 * @param string $query     the query to execute
 * @param bool $update      whether or not this is an update operation
 * @return bool|int|string
 */
function insertQuery($query, $update = false)
{
    global $connection;

    if($connection === null) {
        connect();
    }

    if(is_object($connection)) {

        // Run a multi-query (this will allow SQL injection).
        $result = mysqli_multi_query($connection, $query);
        if($result !== true) {
            return false; // Failure.
        }

        // Success.
        return ($update === false) ? true : mysqli_insert_id($connection);
    }
}
