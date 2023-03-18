<?php
   // Write a PHP program to swap two numbers without using a third variable
   
   $firstVar = 12;
   $secondVar = 10;
   echo "Numbers :- " . $firstVar . ", " . $secondVar . "\n";
   
   $firstVar = $firstVar + $secondVar;
   $secondVar = $firstVar - $secondVar;
   $firstVar = $firstVar - $secondVar;
   
   echo "Swapped Numbers :- " . $firstVar . ", " . $secondVar; 
?>
