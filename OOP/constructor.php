<?php
class User 
{
    const GREET = "Hello Welcome"; // const is casesensitive and is in uppercase, declared with const.
    public $username;
    protected $password;

    public function greet()
    {
        echo self::GREET . " Folks!!"; // accessing constant GREET with self coz its inside own class. 
    }

    public function __construct($username, $password)   // constructor function __construct is automatically called by PHP when objrct is created.
    {
        $this->username = $username;
        $this->password = $password;
    }
    // getters
    public function getPass()
    {
        return $this->password;
    }
    // setters
    public function setPass($password)
    {
        $this->password = $password;
    }
}
echo User::GREET; // access Constant from class.
echo "<br>";
$greetings = new User('userA', 'passA');//making greeting objet from User to display greet
$greetings->greet(); // calling greeting funtion from User.
echo "<br>";
$userOne = new User('admin2', 'admin');
echo $userOne->username. "<br>";
echo $userOne->setPass('root');
echo $userOne->getPass(). "<br>";
// echo $userOne->password. "<br>"; // returns error; cannot access protected property

// to explain INHERITANCE in PHP OOP.

class Admin extends User // child class Admin is inheriting parent class User
{
    public $role;
    public function __construct($username, $password, $role)
    {
        $this->role = $role;
        parent::__construct($username, $password);  // using parent:: __construct() helps to call constructor and properties of parent Class. thus helps in DRY code.
    }
}
$userTwo = new Admin('admin1', 'root1', 'master');

echo "<br>";
echo $userTwo->username. "<br>";
echo $userTwo->setPass('root');
echo $userTwo->getPass(). "<br>";
echo $userTwo->role. "<br>";
?>