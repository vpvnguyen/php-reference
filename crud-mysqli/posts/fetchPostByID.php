<?php
    // import
    require('../config/index.php');
    echo '<br>fetchPostByID.php<br>';

    // get ID; use mysqli_real_escape_string(connection, query) for security
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // create query
    $query = 'SELECT * FROM posts WHERE id = 1';

    // get result
    $result = mysqli_query($conn, $query);

    // fetch data; data is in an associative array ['name' => 'Vincent'];
    $post = mysqli_fetch_assoc($result);
    var_dump($post);

    // free result
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);

?>

<!-- html -->
<!-- header & navbar -->
<?php include('../inc/header.php'); ?>

<!-- body -->
<div class="container mt-5">
    <h1><?php echo $post['title']; ?></h1>
    <div class="card card-body bg-light">
        <small>
            Created on <?php echo $post['created_at']; ?>by<?php echo $post['author']; ?>
        </small>
        <p><?php echo $post['body']; ?></p>
        <!-- href="/" will return back to root of htdocs. Need to configure to go back to whereever the root should be -->
        <a href="<?php echo ROOT_URL; ?>">Back</a>
    </div>
</div>

<!-- footer -->
<?php include('../inc/footer.php'); ?>



