<?php
$loggedIn = true;

// long
if ($loggedIn) {
    echo 'You are logged in';
} else {
    echo 'You are NOT logged in';
}

echo '<br>';

// short
echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

echo '<br>';

// if your score is > 10
// if your age is > 10
// Average
// if  your age is < 10
// Exceptional

// if your score is < 10
// if your age is > 10
// Horrible
// if your age is < 10
// Average
$age = 20;
$score = 15;
echo "Age: $age<br>";
echo "Score: $score<br>";
echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));

echo '<br>';

$array = ['key1' => 1, 'key2' => 2, 'key3' => 3];
?>

<!-- html -->
<!-- login -->
<div>
<?php if ($loggedIn): ?>
    <h1>You are logged in</h1>
<?php else: ?>
    <h1>You are NOT logged in</h1>
<?php endif; ?>
</div>

<!-- foreach -->
<div>
    <?php foreach ($array as $key => $val): ?>
    <?php echo "Key: $key<br>"; ?>
    <?php echo "Val: $val<br>"; ?>
    <?php endforeach; ?>
</div>

<!-- for loop -->
<?php
$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

for($i = 0, $size = count($people); $i < $size; ++$i) {  
    echo $people[$i]['name'];
    echo '<br>';
}
?>
