<?php
    // works only with GET
    if (isset($_GET['name'])) {
        echo '<div>GET Request</div>';
        echo '<br>';

       print_r($_GET);
       echo '<br>';
        echo $_GET['name'];
        echo '<br>';
        echo $_GET['email'];
        echo '<br>';

        // security; will strip power of html tags from executing
        // example: <script>alert(1)</script>
        // htmlentities will not execute the alert()
        echo htmlentities($_GET['name']);
        echo '<br>';

    }

    // works only with POST
    if (isset($_POST['name'])) {
        echo '<div>POST Request</div>';
        echo '<br>';

        print_r($_POST);
        echo '<br>';

        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);

        echo '<br>';

        echo $name;
        echo '<br>';

        echo $email;
        echo '<br>';

    }

    // will work whether method is GET or POST
    if (isset($_REQUEST['name'])) {
        echo '<div>_REQUEST Request</div>';
        echo '<br>';

        print_r($_POST);
        echo '<br>';

        $name = htmlentities($_REQUEST['name']);
        $email = htmlentities($_REQUEST['email']);

        echo '<br>';

        echo $name;
        echo '<br>';

        echo $email;
        echo '<br>';

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
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">

    </form>

<h1>POST</h1>
    <form method="POST" action="get_post.php">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">

    </form>
</body>
</html>