<?php

/**
 * Timezone
 */
date_default_timezone_set('Asia/Seoul');

/**
 * Error Handling
 */
ini_set('display_errors', 'Off');

/**
 * Database(MySQLi)
 */
$GLOBALS['DB_CONNECTION'] = mysqli_connect('#', '#', '#', '#');

register_shutdown_function(function () {
    if (array_key_exists('DB_CONNECTION', $GLOBALS) && $GLOBALS['DB_CONNECTION']) {
        mysqli_close($GLOBALS['DB_CONNECTION']);
    }
});

if (!$GLOBALS['DB_CONNECTION']) {
    exit;
}
/**
 * Session
 */
ini_set('session.gc_maxlifetime', 1440);
session_get_cookie_params(1440);

session_start();