<?php

require_once 'init.php';

// Destroy session.
session_destroy();

// Back to login page.
redirectToLogin();
