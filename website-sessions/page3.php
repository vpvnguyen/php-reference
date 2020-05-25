<?php
    session_start();
    $name = $_SESSION['name'];
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
</body>
</html>