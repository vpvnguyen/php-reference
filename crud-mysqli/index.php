<?php
    // import
    require('config/index.php');
    echo '<br>index.php<br>';
?>

<!-- html -->
<!-- header & navbar -->
<?php include('inc/header.php'); ?>
<!-- body -->
<?php include('posts/fetchPosts.php'); ?>
<!-- footer -->
<?php include('inc/footer.php'); ?>