<?php

/* Create locations in memory for me. I'm thinking with values True/False */

$b1 = True;
$b2 = False;
$b3 = (bool) "abc";
$b4 = (boolean) 5;
$b5 = (bool) 0;
$b6 = (bool) -1.4;

var_dump($b1);
var_dump($b2);
var_dump($b3);
var_dump($b4);
var_dump($b5);
var_dump($b6);


 ?>
