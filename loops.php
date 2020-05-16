<?php
// for loop
// @params - initializer, condition, increment
for($i = 0; $i < 10; $i++){
    echo $i; // 0123456789
    
}

echo '<br>';

// while loop
// @params - condition

$i = 0;

while($i < 10){
    echo $i; // 0123456789
    $i++;
}

echo '<br>';

// do while loop
// @params - condition

$i = 0;
do{
    echo $i; // 0123456789
    $i++;
}

while($i < 10);

echo '<br>';

// foreach loop - works with arrays

$people = ['brad', 'joe', 'will'];

foreach($people as $person){
    echo $person; // bradjoewill
}

echo '<br>';

$peopleKeyVal = ['brad' => 'brad@gmail.com', 'joe' => 'joe@gmail.com', 'will' => 'will@gmail.com'];

foreach($peopleKeyVal as $person => $email){
    echo $person.': '.$email; // brad: brad@gmail.comjoe: joe@gmail.comwill: will@gmail.com
}

?>