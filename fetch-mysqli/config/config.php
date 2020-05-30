<?php
    // get credentials; $dbPassword
    require('creds.php');

    // define the root url
    define('ROOT_URL', 'http://localhost/php-reference/fetch-mysqli/');

    // define db
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', $dbPassword);
    define('DB_NAME', 'php_blog');
?>