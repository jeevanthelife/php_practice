<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Page</h1>

    <?php 
        /*
        
$msg = "hello";
echo "$msg is from \"\$msg.\"";  //escaping characters. for printing characters like "" and $ from echo using \ 
        $x= 2.26;                       //making a variable; they are case sensitive
        $y= 4;
        $bikes = array("Yamaha","KTM","BMW");           //creating the array
        var_dump($x);                            //outputs the data type as float
        var_dump($y);                           //outputs the data type as integer 
        var_dump($bikes);                   // shows data type of elements in the array (string)
        echo $x + $y ."<br>";               //adds two number and keeps the result as float
        echo "$bikes[1]". "<br>";           //outputs KTM


        echo strlen("BMW Car");             // outputs 7 :calculates the length of the string
        echo str_word_count("hi kid");           // outputs 2 : calculates the number of word
        echo strrev("Hello world!");            // outputs !dlrow olleH :reverse the given string
        echo strpos("Hello world!", "world");       // outputs 6 :returns the position
        echo str_replace("Bike", "Car", " BMW Bike!");      // outputs BMW Car

        echo(max(0, 150, 30, 20, -8, -200));         // returns 150 : min()/max() are built in math functions 
        echo rand() or rand(10, 100)             //outputs random number between the given parameter if given


        (define is used for making constant variable)
        define("GREETING", "Welcome to W3Schools.com!", true);  //default is false
        echo greeting;     
        
        (counting elements in an array)
        $cars = array("Volvo", "BMW", "Toyota");
        echo count($cars);  //outputs 3

        */

/*
        class Bike{                     //creating class
            public $year;
            public $model;
            public function __construct($year,$model){          //making constructor
                $this->year = $year;
                $this->model = $model;
            }
            public function msg(){              //making function
                return "My bike is " . $this->year ." " . $this->model . "!<br>";
            }
        }
        $xx = new Bike("2020","R1");                    //making object
        echo $xx -> msg();
*/

// $fruits= array("Apple", "mango", "graPes", "Banana");       
// $b = array_change_key_case($fruits,CASE_UPPER);
// foreach ($b as $a){
//     echo $a."<br>";
// }

/*--to print all th elements in the multi dimentional array
$num = array (
    array(1,2,3),
    array(4,5,6)
);
for($i=0; $i<=2; $i++){
    echo $num[0][$i].",";
        
}
    for($j=0; $j<=2; $j++){
        echo $num[1][$j].",";       
    }
*/

/*--to print all elements in $nums array
$keys=array(0,1,2,3,4);             //keys for foreach to enter the second array inside array.
$nums = array (8,2,3,6,array(4,5,7,9));
$i=0;
for($i=0; $i<=3; $i++){
    echo $nums[$i];
}
foreach($nums[$keys[$i]] as $key => $value) {
    echo  $value;
}
*/



?>

    


</body>
</html>
