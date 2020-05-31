<?php
    require('../config/index.php');

    // check for submit
    if (isset($_POST['submit'])) {
        echo 'submitted';
        // get form data
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        $query = "UPDATE posts SET title='$title', author='$author', body='$body' WHERE id='{$update_id}'";

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

<div class="container mt-5">
    <h1>Edit Post</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" name="body" class="form-control" value="<?php echo $post['body']; ?>">
        </div>
        <!-- hidden input to  -->
        <input type="hidden" name="update_id" value="<?php echo $post['id']?>">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</div>

<!-- footer -->
<?php include('../inc/footer.php'); ?>


