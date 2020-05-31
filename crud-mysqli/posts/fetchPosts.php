<?php
    // create query
    $query = 'SELECT * FROM posts';

    // get result
    $result = mysqli_query($conn, $query);

    // fetch data; data is in an associative array ['name' => 'Vincent'];
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);
?>

<h1>Posts</h1>
<?php foreach($posts as $post): ?>
    <div class="row">
        <div class="card card-body bg-light">
            <h3><?php echo $post['title']; ?></h3>
            <span>By <?php echo $post['author']; ?> on <?php echo $post['created_at']; ?></span>
            <p class="m-3"><?php echo $post['body']; ?></p>
            <a href="<?php echo ROOT_URL; ?>posts/fetchPostByID.php?id=<?php echo $post['id']; ?>">Read More</a>
        </div>
    </div>
<?php endforeach; ?>
