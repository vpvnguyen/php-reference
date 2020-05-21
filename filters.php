<?php
    // if (filter_has_var(INPUT_POST, 'data')) {
    //     echo 'Data Found';
    // } else {
    //     echo 'No Data';
    // }

    if (filter_has_var(INPUT_POST, 'data')) {
        if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
            echo 'Email valid';
        } else {
            echo 'Email is NOT valid';
        }
    }
?>

<form method="POST" 
    action="
    <?php echo $_SERVER['PHP_SELF']; ?>
">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>