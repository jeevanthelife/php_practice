<?php
//trait can have any access modifier(public, protected, private)
trait message1 {
  public function msg1() 
  {
    echo "hello world ";
  }
}

trait message2 {
  public function msg2() 
  {
    echo " welcome";
  }
}

class Welcome1 
{
  use message1, message2;
}

$obj = new Welcome1();
$obj->msg1();
$obj->msg2();
echo "<br>";
?>