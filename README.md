# php-reference

## Basic principles of PHP

## PHP7 / Apache / MySQL Setup

- Install XAMPP: https://www.apachefriends.org/index.html
- Go into installation directory and run xampp-control as admin
- Navigate to http://localhost/dashboard/ in browser
- Root of webserver: ./xampp/htdocs
- Change password: http://localhost/phpmyadmin/server_privileges.php?viewing_mode=server
- Set password in ./xampp/phpMyAdmin/config.inc.php

```php
/* Authentication type and info */
...
$cfg['Servers'][$i]['password'] = 'REPLACE_ME';
```

## Code Syntax

- Wrap code with:

```php
<?php
    // your code here
?>
```

- Variables

```php
// prefix with $
// start with a letter or underscore
// only letters, numbers, and underscores
// case sensitive
$variable = 'This is a variable';
echo $variable;
```

- Data types:

```php
// String
$string = 'string';
$string2 = 'string2';
$concatString = $string1 . $string2;
echo $concatString;

// Integer
$integer = 1;
$integer2 = 2;
$sum = $integer + $integer2;
echo $sum;

// Float
$float = 1.1;

// Boolean
$boolean = true;

// Arrays
$array = [1, 2, 3];

// Objects
$object = {

};

// Null

// Resource
```

## Procedural & OOP

## Dynamic Pages

## Form Submission / Superglobals

## Working with Databases

## Projects: Contact Form, User Login System
