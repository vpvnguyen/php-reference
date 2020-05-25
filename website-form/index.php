<?php
// notification variables
$msg = '';
$msgClass = ''; // used to set class to different alerts / colors; pass = green, fail = red

// check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
    echo 'clicked submit';
    // get form data; htmlspecialchars to
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // check required fields
    // if name, email, and message is not empty
    if (!empty($name) && !empty($email) && !empty($message)) {
        # pass
        # check if email is valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            # fail
            $msg = 'invalid email';
            $msgClass = 'alert-danger';
        } else {
            # pass
            echo '<br>valid email';
            $toEmail = 'support@support.com';
            $subject = 'Contact request from '.$name;
            $body = '<h2>Contact Request</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>
            ';

            # email headers
            $headers = 'MIME-Version: 1.0' ."\r\n";
            # .= will append
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

            # addtional headers
            $headers .= "From: " .$name. "<".$email.">"."\r\n";

            if (mail($toEmail, $subject, $body, $headers)) {
                # pass; send email
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            } else {
                # fail; notify user
                $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
            }
        }
    } else {
        # fail
        // if fail, alert user and set div class to red
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}
?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>

    <!-- body -->
    <div class="container mt-5">
        <!-- user notification -->
        <?php if ($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>">
                <?php echo $msg; ?>
            </div>
        <?php endif; ?>

        <!-- contact form -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <!-- if field isset, leave user typed value in field -->
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <!-- if field isset, leave user typed value in field -->
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <!-- if field isset, leave user typed value in field -->
                <textarea name="message" id="" cols="30" rows="10" class="formcontrol"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>