<?php
class StaticExample
{
    public static function fun1()
    {
        echo "public Static function One.<br>";
    }
    protected static function fun2()
    {
        echo "protected static function two.";
    } 
}
class NormalClass
{
    public function show()
    {
        StaticExample::fun1();
    }
}
class ChildOfStatic extends StaticExample
{
    public $info;
    public function __construct()
    {
        $this->info = StaticExample::fun2();
    }
}
echo StaticExample::fun1();
// echo StaticExample::fun2(); // shows Fatal error: Uncaught Error: Call to protected method StaticExample::fun2() from global scope 
echo "<br>";
$obj1 = new NormalClass();
echo $obj1->show();
echo "<br>";
$obj2 = new ChildOfStatic();
echo $obj2->info;
echo "<br>";

// Example of static properties
class Pi 
{
    public static $value=3.14159;
}
  
class X extends Pi 
{
    public function xStatic() 
    {
      return parent::$value;
    }
}
  
echo X::$value; // Get value of static property directly via class
echo "<br>";
$x = new X(); // or get value of static property via xStatic() method
echo $x->xStatic(); 
?>