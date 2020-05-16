<?php
    // ==
    // ===
    // <
    // >
    // <=
    // >=
    // !=
    // !==

    $num = 5;

    if ($num == 5) {
        echo true; // 1
        echo '<br>';
        echo 'true'; // true
    } else {
        echo false; // (nothing)
        echo '<br>';
        echo 'false'; // false
    }

    echo '<br>';

    // NESTING CONDITIONAL
    if ($num >= 5) {
        if ($num < 10) {
            echo 'true'; // true
        }
    }

    // LOGICAL OPERATORS
    // AND &&
    // OR ||
    // XOR 

    echo '<br>';

    // works without curly braces
    if ($num > 4 && $num < 10) echo true; // 1

    echo '<br>';

    // exclusive or. only 1 should be true to pass
    if ($num !== 5 XOR $num == 5) echo true; // 1

    echo '<br>';

    // SWITCH

    $favColor = 'red';
    switch ($favColor) {
        case 'red':
            echo "Your fav color is $favColor";
        break;
        case 'green':
            echo "Your fav color is $favColor";
        break;
        case 'blue':
            echo "Your fav color is $favColor";
        break;
        default:
            echo "Your fav color is $favColor and is not red, green, or blue";
    }
?>