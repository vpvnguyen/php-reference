<?php
    // check if user is logged in
    if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
    } else {
        $username = '';
    }

    // set cookie
    if (isset($_POST['submit'])) {
        # get username
        $username = htmlentities($_POST['username']);

        # set new cookie; expire 1hr
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
    <title>Cookies - Page2</title>
</head>
<body>
    <div><?php echo isset($_COOKIE['username']) ? $_COOKIE['username'].' is logged in' : 'No user logged in'; ?></div>
    
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" placeholder="<?php echo 'Enter new username'; ?>">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>