<?php
    // get credentials; $dbPassword
    require('creds.php');

    // create connection
    $conn = mysqli_connect('localhost', 'root', $dbPassword, 'php_blog');

    // check connection
    if (mysqli_connect_errno()) {
        // connection failed
        echo 'Failed to connect to MySQL '.mysqli_connect_errno();
    }
?>