<?php

require_once 'init.php';

// Load the file we specified.
$file = $_GET['load'];

/** @noinspection PhpIncludeInspection */
require_once __DIR__ . '/templates/' . $file;
