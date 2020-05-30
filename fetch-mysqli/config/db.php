<?php
    // get credentials
    // require('config.php'); // do not need this line because *.php already required('config.php');

    // create connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // check connection
    if (mysqli_connect_errno()) {
        // connection failed
        echo 'Failed to connect to MySQL '.mysqli_connect_errno();
    }
?>