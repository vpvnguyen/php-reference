<?php
// people array; mock DB
$people[] = 'Vincent';
$people[] = 'Steve';
$people[] = 'John';
$people[] = 'Joe';
$people[] = 'Chris';
$people[] = 'Brian';
$people[] = 'Bryan';
$people[] = 'Alex';
$people[] = 'Andrew';
$people[] = 'Edgar';
$people[] = 'Moses';
$people[] = 'Thomas';

// get query string
$q = $_REQUEST['q'];

$suggestion = '';

// get suggestions
if ($q !== '') {
    # loop through people array
    $q = strtolower($q);
    $len = strlen($q);

    foreach ($people as $person) {
        // stristr() find first occurrence; substr() returns part of string
        if (stristr($q, substr($person, 0, $len))) {
            if ($suggestion === '') {
                $suggestion = $person;
            } else {
                // append person to current suggestion
                $suggestion .= ", $person";
            }
        }
    }

} 
echo $suggestion === "" ? "No suggestion" : $suggestion;

?>