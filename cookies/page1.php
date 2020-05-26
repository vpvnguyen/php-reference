<?php 
    if (isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);

        // get username, pass in username, set expiration for 1 hour
        setcookie('username', $username, time() + 3600);

        header('Location: page2.php');
    }

?>


<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <div>Save username to a cookie</div>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" placeholder="Username">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>