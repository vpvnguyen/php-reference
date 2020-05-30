<?php
    require('config/db.php');

    // create query
    $query = 'SELECT * FROM posts';

    // get result
    $result = mysqli_query($conn, $query);

    // fetch data; data is in an associative array ['name' => 'Vincent'];
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    var_dump($posts);

    // free result
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);

?>