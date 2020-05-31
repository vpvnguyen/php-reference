<?php
    echo '<br>';
    require('creds.php');

    // define db creds
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', $DB_PASS);
    define('DB_NAME', 'php_blog');

    // create connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // check connection
    if (mysqli_connect_errno()) {
        // connection failed
        echo 'Failed to connect to MySQL '.mysqli_connect_errno();
    }

    echo 'db.php<br>';
?>