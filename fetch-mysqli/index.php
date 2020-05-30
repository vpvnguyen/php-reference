<?php
    require('config/config.php');
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

<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    

    <div class="container">
        <h1>Posts</h1>
        <?php foreach ($posts as $post): ?>
            <div class="card card-body bg-light">
                <h3><?php echo $post['title']; ?></h3>
                <small>
                    Created on <?php echo $post['created_at']; ?>
                    by
                    <?php echo $post['author']; ?>
                </small>
                <p><?php echo $post['body']; ?></p>
                <a class="btn btn-default" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
            </div>
        <?php endforeach; ?>
    </div>


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>