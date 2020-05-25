<?php
    session_start();

    echo '$_SESSION: ';
    print_r($_SESSION);

    unset($_SESSION['name']);
    unset($_SESSION['email']);

    echo '<br>unset $_SESSION: ';
    print_r($_SESSION);

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';

?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions - page 4</title>
</head>
<body>
    <h1>Logged Out</h1>
    <div>Hello, <?php echo $name; ?></div>
</body>
</html>