<?php
// $x  = 12;
// $status = ($x < 15) ? 'less than 15' : 'greater than 15';
// echo $status;
// $y = null;
// $status = $y ?? 'ahahh';
// echo $status;

$x= "Jeevan";
$check= ($x = "jeevan") ? "name found" : "no name found!";      //ternary operator
echo $check . "<br>";

$y= "Jeevan";
$check = ($y = "jeevan") ?? "no name found!";               //null coalescing operator
echo $check;
?>