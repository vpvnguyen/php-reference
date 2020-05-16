<?php
   $numbers = [1, 2, 3, 4, 5];
   $people = array('jim', 'joe', 'bob');

   // print_r to echo whole array
   print_r($numbers); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
   // echo item in array
   echo $people[1]; // jim

   // add to array or reassignment
   $people[3] = 'Vince';

   print_r($people); // Array ( [0] => jim [1] => joe [2] => bob [3] => Vince )

   // Associative arrays
   // key - value pairs
   $keyVal = array('brad' => 35, 'joe' => 21, 'will' => 1);
   $ids = [22 => 'brad', 44 => 'joe', 100 => 'will'];

   echo $keyVal['brad']; // 35
   echo $ids[22]; // brad

   $keyVal['jill'] = 1000;
   echo $keyVal['jill']; // 1000
   print_r($keyVal); // Array ( [brad] => 35 [joe] => 21 [will] => 1 [jill] => 1000 )

   // multi-dimensional array
   $cars = array(
      array('honda', 20, 10),
      array('toyota', 1, 5),
      array('nissan', 2, 3),
   );

   echo $cars[1][0]; // toyota
?>