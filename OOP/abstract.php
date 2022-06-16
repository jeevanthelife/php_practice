<?php
//trait can have less access modifier but no private (i.e. public, protected)
abstract class National
{
    public $name;
    public $age;
    public function Intro()
    {
        return $this->name.", ".$this->age." ";
    }
    abstract public function greet();
}
class Nepali extends National
{
    public function greet()
    {
        return "Namaste!!";
    }
    public function intro()
    {
        return parent::intro().", and I am a Nepali. ";
    }
}
$national = new Nepali();
$national->name = "Dorje";
$national->age = 20;
echo $national->intro();
echo $national->greet();
?>