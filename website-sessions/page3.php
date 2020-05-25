<?php
    session_start();
    $name = $_SESSION['name'];

    // on submit, redirect to page4.php
    if (isset($_POST['submit'])) {
        header('Location: page4.php');
    }
?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions - Page 3</title>
</head>
<body>
    <h1>Heyo, <?php echo $name; ?></h1>

    <!-- logout -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="submit" name="submit" value="Log out">
    </form>
</body>
</html>