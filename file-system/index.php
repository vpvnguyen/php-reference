<?php
    $path = '/dir1/file.php';
    $file1 = 'file1.txt';
    $noFile = 'adasdaferfsdfwe.txt';
    $replaceWithStringFile = 'replaceWithString.txt';
    $readWriteFile = 'read-write.txt';

    // return filename
    echo basename($path); // file.php

    echo '<br>';

    // return filename without ext
    echo basename($path, '.php'); // file

    echo '<br>';

    // return dir name from path
    echo dirname($path); // /dir1

    echo '<br>';

    // get abs path
    echo realpath($file1); // C:\xampp\htdocs\php-reference\file-system\file1.txt
    echo '<br>';
    echo realpath($noFile); // (nothing)

    echo '<br>';

    // check if .txt exists
    echo file_exists($file1); // 1 (true)
    echo '<br>';
    echo file_exists($noFile); // (nothing)

    echo '<br>';

    // checks to see if file and folder exists
    echo is_file($file1); // 1 (true)
    echo '<br>';
    echo is_file($noFile); // (nothing)

    // check if writeable
    echo is_writable($file1); // 1 (true)
    echo '<br>';
    echo is_writable($noFile); // (nothing)

    echo '<br>';

    // check if readable
    echo is_readable($file1); // 1 (true)
    echo '<br>';
    echo is_readable($noFile); // (nothing)

    echo '<br>';

    // get file size
    echo filesize($file1); // 1 (true)
    echo '<br>';
    echo filesize($noFile); // Warning: filesize(): stat failed for adasdaferfsdfwe.txt in C:\xampp\htdocs\php-reference\file-system\index.php on line 57

    echo '<br>';

    // create a dir
    mkdir('testing'); // creates a folder as ./testing; if exists; error
    echo './testing/ created!';
    echo '<br>';

    // remove dir
    rmdir('testing'); // will remove ./testing
    echo './testing/ removed!';

    echo '<br>';
    
    // copy file
    copy('file1.txt', 'file2.txt'); // will copy file1.txt as file2.txt; will overwrite any file with same name
    echo './file1.txt copied as ./file2.txt';

    echo '<br>';

    // rename file
    rename('file2.txt', 'renamedFile.txt');
    echo 'file2.txt renamed as renameFile.txt';

    echo '<br>';

    // delete file
    unlink('deleteMe.txt'); // case insensitive
    echo 'deleteMe.txt deleted!';

    echo '<br>';

    // write from file to string
    echo file_get_contents($file1); // heyo world

    echo '<br>';

    // replace with string in file
    echo file_put_contents($replaceWithStringFile, 'replace with string in file;'); // 27 (chars in string)

    echo '<br>';

    // append string to file
    $currentStr = file_get_contents($replaceWithStringFile);
    $appendThisStr = $currentStr.' append this string;';
    file_put_contents($replaceWithStringFile, $appendThisStr);

    // open file for reading
    $handle = fopen($readWriteFile, 'r');
    $data = fread($handle, filesize($readWriteFile));
    echo $data; // read and write me;

    // open file for writing; also creates new file
    $handle = fopen('createWrite.txt', 'w');
    $txt = 'text written';
    fwrite($handle, $txt);
    $txt = "\ntext on a new line";
    fwrite($handle, $txt);
    fclose($handle);

?>