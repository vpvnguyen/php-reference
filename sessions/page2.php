<?php
    // without session_start() variables will not be set in the session
    session_start();

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

    if (isset($_POST['submit'])) {
        // redirect to Dashboard
        header('Location: page3.php');
    }
?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions - Page2</title>
</head>
<body>
    <div>Thank you <strong><?php echo $name; ?></strong>, you have subscribed with the email <strong><?php echo $email; ?></strong></div>
    <div>This page now has a session with your NAME and EMAIL. Refreshing the page will not clear.</div>

    <!-- dashboard -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="submit" name="submit" value="Go To Dashboard">
    </form>
</body>
</html>