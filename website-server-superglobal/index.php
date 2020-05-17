<!-- import server -->
<?php include 'server-info.php'; ?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Server Superglobal</title>
</head>
<body>
    <div class="container">
        <h1>Server & File Info</h1>
        <!-- list key:value server info -->
        <?php if($server): ?>
            <ul class="list-group">
                <?php foreach($server as $key => $value): ?>
                    <li class="list-group-item">
                        <strong>
                            <?php echo $key; ?>:
                        </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h1>Client Info</h1>
        <?php if ($client): ?>
            <ul class="list-group">
                <?php foreach ($client as $key => $value): ?>
                    <li class="list-group-item">
                        <strong>
                            <?php echo $key; ?>:
                        </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <!-- older way -->
        <h1>Server & File Info</h1>
        <?php if($server){ ?>
            <ul class="list-group">
                <?php foreach ($server as $key => $value) { ?>
                    <li class="list-group-item">
                        <strong>
                            <?php echo $key; ?>:
                        </strong>
                        <?php echo $value; ?>
                    </li>
                <?php }; ?>
            </ul>
        
        <?php }; ?>
    </div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>