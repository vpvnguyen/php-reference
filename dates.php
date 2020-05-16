<?php

    // src: https://www.php.net/manual/en/function.date.php
    // today's date = 5/16/2020

    echo date('d'); // number date of day
    echo '<br>';
    echo date('m'); // number date of month
    echo '<br>';
    echo date('y'); // number date of year
    echo '<br>';
    echo date('1'); // number date of day of week
    echo '<br>';
    echo date('m/d/y'); // 5/16/2020
    echo '<br>';
    echo date('m-d-y'); // 05-16-20

    echo '<br>';

        // set timezone
    // @param string is case insensitive
    date_default_timezone_set('america/los_angeles');
    echo "The time is " . date("h:i:sa"); // The time is 09:43:46am
    echo '<br>';

    // HOUR / MIN / SECONDS
    echo date('h'); // (hour)
    echo '<br>';
    echo date('i'); // (min)
    echo '<br>';
    echo date('s'); // (seconds)

    echo '<br>';

    // hours, mins, secs, month, day, year
    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    echo $timestamp; // 368990094
    echo '<br>';
    echo date('m/d/y', $timestamp); // 09/10/81

    echo '<br>';

    $timestamp2 = strtotime('7:00pm March 22 2016');
    echo $timestamp2; // 1458698400
    echo '<br>';
    echo date('m/d/y h:i:sa', $timestamp2); // 03/22/16 07:00:00pm

    echo '<br>';

    $timestamp3 = strtotime('tomorrow');
    echo date('m/d/y h:i:sa', $timestamp3); // 05/17/20 12:00:00am

    echo '<br>';

    $timestamp4 = strtotime('next Sunday');
    echo date('m/d/y h:i:sa', $timestamp4); // 05/17/20 12:00:00am

?>