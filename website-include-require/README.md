## importing php files

```php
<?php include 'inc/header.php'; ?>
// function format
<?php include('inc/header.php'); ?>

<?php require_once 'inc/header.php'; ?>
```

- `include`: will run scripts regardless of error
- `require`: will halt scripts on error
- `require_once`: same as require but will check the file to see if it has already been included; if it has, it will not require it again
