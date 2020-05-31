<?php
    // import
    require('config/index.php');
    echo '<br>index.php<br>';

    // create query
    $query = 'SELECT * FROM posts';

    // get result
    $result = mysqli_query($conn, $query);

    // fetch data; data is in an associative array ['name' => 'Vincent'];
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    echo '<br>';
    var_dump($posts);
    echo '<br>';

    // free result
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);
?>

<!-- html -->
<!-- header -->
<?php include('inc/header.php'); ?>
<!-- navbar -->
<?php include('inc/navbar.php'); ?>
<!-- body -->
<!-- footer -->
<?php include('inc/footer.php'); ?>