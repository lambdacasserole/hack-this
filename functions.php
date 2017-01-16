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
