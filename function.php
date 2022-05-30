<?php

// 3 => 3*2*1= | 0=>1

//function factorial($x){
    //using do while loop
    /*  if ($x===0){
        return 1;
    }
    $factorial =1;
    $n = $x;
    do{ 
        $factorial = $factorial * $n;
        $n= $n-1;
    }while($n>=1);
    return $factorial;  */


    ////using for loop
/*  $factorial=1;
    $i=1;
    for($i=1; $i<=$x; $i++){
        $factorial= $factorial * $i;
        
    }
    echo "Factorial of $x is: $factorial";
}   */

// echo factorial(3); //using dowhile loops
// factorial(3);       //using for loop
//}


// function factorial($n)    
// {    
//     if ($n < 0)    
//         return "invalid number"; /*Wrong value*/    
//     if ($n == 0)    
//         return 1; /*Terminating condition*/    
//     return ($n * factorial ($n -1));    
// }    
    
// echo factorial(-2); 


/* 
function primecheck($n){
    
    if($n <=1){
        return "It is not a prime number.";
    }
    $x = $n;
    $i=2;
    for($i = 2; $i < $x; $i++){
        if($x % $i == 0){
            return "It is not a prime number.";
        }
    }
    return "It is a prime number.";

}
echo primecheck(-1);
*/


/*
function fib($n){
     $a=0;
     $b=1;
     $i=0;
     while($i<$n){
        echo $a.",".$b.",";
        $a=$a+$b;
        $b=$a+$b;
        $i++;
        
     }
}
fib(5);
*/



/*
function table($n,$t){      //$n is for which number's table to generate and $t is how many times to generate
    $i=1;
    $a=1;
    for($i=1;$i<=$t;$i++){
        $r=$n*$a;
        echo $n."*".$a."=".$r."<br>";
        $a++;
    }
}
table(8,20);
*/


// $num = 14597;
// $sum = 0; $rem = 0;
// // echo strlen($num)."<br>";

// for ($i = 0; $i < strlen($num); $i++) {
//     // echo $i."<br>";
//     $rem = $num % 10;
//     $sum = $sum + $rem;
//     $num = $num/10;
// }
// echo $sum;

// function adder(&$str2)  
// {  
//     $str2 .= 'Call By Value';  
// }  
// $str = 'Hello ';  
// adder($str);  
// echo $str;

// function increment($i)  
// {  
//     $i++;  
// }  
// $i = 10;  
// increment($i);  
// echo $i;  


  