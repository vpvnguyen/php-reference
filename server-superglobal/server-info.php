<?php
    // $_SERVER SUPERGLOBAL

    // create server array
    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header'=> $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Abosolute Path' => $_SERVER['SCRIPT_FILENAME']
    ];

    echo $server['Host Server Name']; // localhost
    echo '<br>';

    echo $server['Host Header']; // localhost
    echo '<br>';

    echo $server['Server Software']; // Apache/2.4.43 (Win64) OpenSSL/1.1.1g PHP/7.4.5
    echo '<br>';

    echo $server['Document Root']; // C:/xampp/htdocs
    echo '<br>';

    echo $server['Current Page']; // /php-reference/website-server-superglobal/server-info.php
    echo '<br>';

    echo $server['Script Name']; // /php-reference/website-server-superglobal/server-info.php
    echo '<br>';

    echo $server['Abosolute Path']; // C:/xampp/htdocs/php-reference/website-server-superglobal/server-info.php
    echo '<br>';

    // create client array
    $client = [
        'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT']
    ];

    print_r($client); // Array ( [Client System Info] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36 [Client IP] => ::1 [Remote Port] => 62241 )
?>