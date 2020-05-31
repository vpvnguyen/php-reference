<?php
    // import
    require('config/index.php');
    echo '<br>index.php<br>';
?>

<!-- html -->
<!-- header & navbar -->
<?php include('inc/header.php'); ?>

<!-- body -->
<div class="container mt-5">
    <?php include('posts/fetchPosts.php'); ?>
</div>
<!-- footer -->
<?php include('inc/footer.php'); ?>