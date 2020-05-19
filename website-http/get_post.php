<?php

    $profileName = '';
    $profileEmail = '';

    // works only with GET
    if (isset($_GET['get-name'])) {
        echo '<div>GET Request</div>';
        echo '<br>';

        print_r($_GET);
        echo '<br>';
        echo $_GET['get-name'];
        echo '<br>';
        echo $_GET['get-email'];
        echo '<br>';

        // security; will strip power of html tags from executing
        // example: <script>alert(1)</script>
        // htmlentities will not execute the alert()
        echo htmlentities($_GET['get-name']);
        echo '<br>';

        $profileName = $_GET['get-name'];
        $profileEmail = $_GET['get-email'];


    }

    // works only with POST
    if (isset($_POST['post-name'])) {
        echo '<div>POST Request</div>';
        echo '<br>';

        print_r($_POST);
        echo '<br>';

        $postName = htmlentities($_POST['post-name']);
        $postEmail = htmlentities($_POST['post-email']);

        echo '<br>';

        echo $postName;
        echo '<br>';

        echo $postEmail;
        echo '<br>';

        $profileName = $_POST['post-name'];
        $profileEmail = $_POST['post-email'];

    }

    // will work whether method is GET or POST
    if (isset($_REQUEST['post-name'])) {
        echo '<div>_REQUEST Request</div>';
        echo '<br>';

        print_r($_REQUEST);
        echo '<br>';

        $reqName = htmlentities($_REQUEST['post-name']);
        $reqEmail = htmlentities($_REQUEST['post-email']);

        echo '<br>';

        echo $reqName;
        echo '<br>';

        echo $reqEmail;
        echo '<br>';

        $profileName = $reqName;
        $profileEmail = $reqEmail;


    }

    echo $_SERVER['QUERY_STRING'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP</title>
</head>
<body>
<h1>GET</h1>
    <form method="GET" action="get_post.php">
        <div>
            <label for="get-name">Name</label>
            <input type="text" name="get-name">
        </div>
        <div>
            <label for="get-email">Email</label>
            <input type="text" name="get-email">
        </div>
        <input type="submit" value="Submit">

    </form>

<h1>POST</h1>
    <form method="POST" action="get_post.php">
        <div>
            <label for="post-name">Name</label>
            <input type="text" name="post-name">
        </div>
        <div>
            <label for="post-email">Email</label>
            <input type="text" name="post-email">
        </div>
        <input type="submit" value="Submit">
    </form>

    <ul>
        <li>
            <a href="get_post.php?get-name=get_test&get-email=get_test%40gmail.com">Get Profile</a>
        </li>
    </ul>
    <h1><?php if ($profileName !== '') echo "{$profileName}'s profile"; ?></h1>
    <h1><?php if ($profileEmail !== '') echo "Email: {$profileEmail}"; ?></h1>

</body>
</html>