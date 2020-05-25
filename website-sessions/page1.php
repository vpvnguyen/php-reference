<?php
    if (isset($_POST['submit'])) {
        echo 'Form submitted';

        // start session
        session_start();

        // take POST value and set to SESSION variables; use htmlentities() for security
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        // redirect
        header('Location: page2.php');
    }
?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions - Page1</title>
</head>
<body>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <input type="text" name="email" placeholder="john@doe.com">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    
</body>
</html>