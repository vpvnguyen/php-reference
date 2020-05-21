<?php
// substr()
// returns a portion of a string

// start at the 0th position
$output = substr('heyo', 0);
echo $output; // heyo

echo '<br>';

// 1st position
$output = substr('heyo', 1);
echo $output; // eyo

echo '<br>';

$output = substr('heyo', 1, 2);
echo $output; // ey

echo '<br>';

// starting from the back position and return string left to right
// -1 starts at 'o' 
$output = substr('heyo', -2);
echo $output; // yo

echo '<br>';

// length
$output = strlen('heyo');
echo $output; // 4

echo '<br>';

// finds the first occurrence
$output = strpos('heyo', 'y');
echo $output; // 2

echo '<br>';

// finds the last occurrence
$output = strrpos('heyyo', 'y');
echo $output; // 3

echo '<br>';

// counts length and logs output
$output = 'heyo    ';
echo var_dump($output); // string(8) "heyo "

echo '<br>';

// trim
echo var_dump(trim($output)); // string(4) "heyo"
echo '<br>';
echo trim($output); // heyo

echo '<br>';


// uppercase all
$output = strtoupper('heyo');
echo $output; // HEYO

echo '<br>';

// lowercase all
$output = strtolower('HEYO');
echo $output; // heyo

echo '<br>';

// capitalize every word
$output = ucwords('heyo world');
echo $output; // Heyo World

echo '<br>';

// replace all occurrences of a search string with a replacement
$text = 'heyo world';
# str_replace(search, replaceWith, stringBeingSearched)
$output = str_replace('world', '', $text);
echo $output; // heyo

echo '<br>';

// test if string
$output = is_string('heyo world');
echo $output; // 1
echo '<br>';
$output = is_string(1);
echo $output; // 1
echo '<br>';

$values = array(true, false, null, 'abc', 33, '33', 1.1, '1.1', '', ' ', 0, '0');
foreach ($values as $val) {
    if (is_string($val)) {
        echo "{$val} is a string<br>";
        // abc is a string
        // 33 is a string
        // 1.1 is a string
        // is a string
        // is a string
        // 0 is a string
    }
}

echo '<br>';

// compress string

$output = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda deserunt rerum vitae beatae recusandae iste placeat eaque! Et aut labore odit possimus, commodi voluptatem enim iure aspernatur nihil at velit.';
echo gzcompress($output); // unreadable text
echo '<br>';
echo '<br>';
echo gzuncompress(gzcompress($output)); // Lorem...
?>