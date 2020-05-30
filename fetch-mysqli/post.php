<?php
    require('config/config.php');
    require('config/db.php');

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
<?php include('inc/header.php'); ?>

    <div class="container">
        <!-- href="/" will return back to root of htdocs. Need to configure to go back to whereever the root should be -->
        <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
        <h1><?php echo $post['title']; ?></h1>
            <div class="card card-body bg-light">
                <small>
                    Created on <?php echo $post['created_at']; ?>
                    by
                    <?php echo $post['author']; ?>
                </small>
                <p><?php echo $post['body']; ?></p>
            </div>
    </div>


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<?php include('inc/footer.php'); ?>
