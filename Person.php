<?php
class Person {
    private $name;
    private $lastname;
    // private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;

    }

    function sayHi($name) {
        return "Hi $name, I`m " . $this->name;
    }

    function setHp($hp) {
        if($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHp() {
        return $this->hp;
    }
    function getName() {
        return $this->name;
    }
    function getMother() {
        return $this->mother;
    }
    function getFather() {
        return $this->father;
    }
    function getLastName() {
        return $this->lastname;
    }

   function getInfo() {
        return "<h3> A few words about myself.<h3><br>" . $this->getName().' '.$this->getLastName() . "<br>".
        "my father is: ". $this->getFather()->getName().' '. $this->getFather()->getLastName() . "<br>".
        "my mother is: ". $this->getMother()->getName().' '. $this->getMother()->getLastName() . "<br>".
        "on my father's side, my grandfather: ". $this->getFather()->getFather()->getName().' '. $this->getFather()->getFather()->getLastName() . "<br>".
        "on my father's side, my grandmother: ". $this->getFather()->getMother()->getName().' '. $this->getFather()->getMother()->getLastName() . "<br>".
        "on my mother's side, my grandfather: ". $this->getMother()->getFather()->getName().' '. $this->getMother()->getFather()->getLastName() . "<br>".
        "on my mother's side, my grandmother: ". $this->getMother()->getMother()->getName().' '. $this->getMother()->getMother()->getLastName() . "<br>".
        "";
    }
}

$igor = new Person("Igor", "Ivanov", 67); //отец жены
$elena = new Person("Elena", "Ivanova", 67); // мать жены
$olga = new Person("Olga", "Petrova", 43, $elena, $igor);
$oleg = new Person("Oleg", "Petrov", 65); //отец мужа
$maria = new Person("Maria", "Petrova", 65); // мать мужа
$alex = new Person("Alex", "Petrov", 43, $maria, $oleg );
$vitaly = new Person("Vitaly", "Petrov", 13, $olga, $alex); // сын

echo $vitaly->getInfo();


// $medkit = 50;
// $alex->setHp(-30);
// echo $alex->getHP() . "<br>";
// $alex->setHP($medkit);
// echo $alex->getHP() . "<br>";
// $alex ->name = "Alex";
// echo $alex->sayHi($igor->name);
// echo $vitaly->getMother()->getFather()->getName();
