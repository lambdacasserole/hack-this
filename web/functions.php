<?php

/**
 * Tries to get a value from the request super-global, returning null if unset.
 *
 * @param string $key   the key of the value to return
 * @return null|mixed
 */
function tryGetRequestValue($key) {
    if (isset($_REQUEST[$key])) {
        return $_REQUEST[$key];
    }
    return null;
}

/**
 * Tries to get a value from the session super-global, returning null if unset.
 *
 * @param string $key   the key of the value to return
 * @return null|mixed
 */
function tryGetSessionValue($key) {
    if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
    }
    return null;
}

/**
 * Returns true if the user is authenticated, otherwise returns false.
 *
 * @return bool
 */
function isAuthenticated() {
    $authenticated = tryGetSessionValue('authed');
    return $authenticated === true;
}

/**
 * Redirects the user to the given URL and ends the request.
 *
 * @param string $url   the URL to redirect to
 */
function redirect($url) {
    header("Location: $url");
    die();
}

/**
 * Redirects the user to the restricted page.
 */
function redirectToRestrictedPage() {
    redirect('/restricted.php');
}

/**
 * Redirects the user to the login page.
 */
function redirectToLogin() {
    redirect('/login.php');
}

/**
 * Redirects the user to the login page if they're not authenticated.
 */
function protectPage() {
    if (!isAuthenticated()) {
        redirectToLogin();
    }
}

/**
 * Returns true if the request is a post request, otherwise returns false.
 *
 * @return bool
 */
function isPostRequest() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

/**
 * Returns true if all given fields are set in the request, otherwise returns false.
 *
 * @param string[] $fields  the array of field key names to check
 * @return bool
 */
function noneAreEmpty($fields) {
    foreach ($fields as $field) {
        if (empty($_REQUEST[$field])) {
            return false; // One field is empty, return false.
        }
    }
    return true; // No fields are empty.
}
