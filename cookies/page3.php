<?php
    // storing arrays in cookies
    $user = [
        'name' => 'Vince',
        'email' => 'test@test.com',
        'position' => 'developer'
    ];

    // serialize because setcookie() only takes in a string
    $user = serialize($user);

    setcookie('user', $user, time() + 3600);

    echo $_COOKIE['user']; // a:3:{s:4:"name";s:5:"Vince";s:5:"email";s:13:"test@test.com";s:8:"position";s:9:"developer";}
    echo '<br>';

    // unserialize the cookie
    $user = unserialize($_COOKIE['user']);

    print_r($user); // Array ( [name] => Vince [email] => test@test.com [position] => developer )
?>