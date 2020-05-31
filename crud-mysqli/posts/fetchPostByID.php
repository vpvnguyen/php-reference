<?php
    // import
    require('../config/index.php');
    echo '<br>fetchPostByID.php<br>';

    // check for submit
    if (isset($_POST['delete'])) {
        // get form data
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "DELETE FROM posts WHERE id = {$delete_id}";

        if (mysqli_query($conn, $query)) {
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'Error: '.mysqli_error($conn);
        }
    }

    // get ID; use mysqli_real_escape_string(connection, query) for security
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // create query
    $query = 'SELECT * FROM posts WHERE id = '.$id;

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
        <hr>

        <!-- delete post by ID -->
        <!-- wrap in div to remove inline element styling from edit post's <a> tag -->
        <div>
            <!-- edit post by ID -->
            <a href="<?php echo ROOT_URL; ?>posts/editPostByID.php?id=<?php echo $post['id']; ?>" role="button" class="btn btn-outline-warning float-left">Edit</a>
            
            <form class="float-left ml-2" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
                <input type="submit" name="delete" value="Delete" class="btn btn-outline-danger">
            </form>
        </div>
    </div>
</div>

<!-- footer -->
<?php include('../inc/footer.php'); ?>



