<?php
   $array = [1, 2, 3, 4, 5];
   print_r($array); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
    
   $first_index = $array[0];

   $array[0] = 0;

   print_r($array); // Array ( [0] => 0 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
   echo($replace_value);
   echo $first_index; 
?>