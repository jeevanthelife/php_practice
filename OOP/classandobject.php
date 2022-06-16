<?php
class Car
{
    //private property cannot be accessed outside the class but can only be accessed if its function is made public
    private $brand;
    private $color;
    public $cc=2500;
    public function set_color($color){
        $this->color = $color;
    }
    public function get_color()
    {
        return  $this->color;
    }
    function get_cc()
    {
        return $this -> cc;
    }
}
$x3 = new Car();
$x3->set_color('black');

echo "The color is :" . $x3->get_color();
echo "<br>";


echo "The cc is :" . $x3->get_cc();
echo "<br>";

$x8 = new Car();
$x8->brand = "bmw"; //this shows fatal error because it is trying to access the private property

echo $x8->brand;
?>