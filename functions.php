<?php

// SIMPLE FUNCTION
    function simpleFunction(){
        echo 'Heyo world';
    }

    simpleFunction(); // Heyo world

    echo '<br>';

    // FUNCTION WITH PARAM
    function sayHello($name){
        echo "Heyo $name";
    }

    sayHello('Vince'); // Heyo Vince

    echo '<br>';

    // ASSIGNMENT FUNCTION
    function assignVar($name = 'world'){
        echo "Heyo $name";
    }

    assignVar(); // Heyo world
    echo '<br>';
    assignVar('Vince'); // Heyo Vince

    echo '<br>';

    // RETURN FUNCTION
    function returnFunc($num1, $num2) {
        return $num1 + $num2;
    }

    echo returnFunc(2, 3); // 5

    echo '<br>';

    // BY REFERENCE
    $num = 10;

    function add($num1){
        $num1 += 5;
    }

    function addAgain(&$num1){
        $num1 += 10;
    }

    add($num);
    echo "Value: $num<br>"; // Value: 10

    addAgain($num);
    echo "Value: $num<br>"; // Value: 20

?>