<?php
include_once "functions.php";

class Person
{
    public $name; //public, private, protected
    public $lastname;

    public function __construct($name, $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function run()
    {
        echo $this->name . " is running";
    }

}

class SuperPerson extends Person {
    public $heroname;

    public function __construct($name, $lastname, $heroname)
    {
        parent::__construct($name, $lastname);
        $this->heroname = $heroname;
    }

    public function fly() {
        echo $this->heroname . " is flying";
    }

    public function run()
    {
        echo $this->name . " is running very hard";
    }


}
$neven = new Person("Neven", "Bojkovic");

$superman = new SuperPerson("Clark", "Kent", "Superman");

//$katarina = new Person();

//$neven->name = "Neven";
//$katarina->name = "Karatina";

//$neven->run();

//$superman->run();
//$neven->name


echo $superman->run();