<?php
class animal {
    //atribut dan makses metode
    protected $name;

    //membuat metode construct untuk menganalisasi
    public function __construct($name) {
        $this->name = $name;
    }

    //metode getname untuk mengambil atribut name
    public function getName() {
        return $this->name;
    }
}
//membuat class pewarisan dari class induk
Class dog extends animal {
    public function makeSound() {
        return "woof!";
    }
}
//membuat class pewarisan dari class induk
class cat extends animal {
    public function makesound() {
        return "meow!";
    }
}
class printer {
    public function print(Animal $animal) {
        echo $animal->getName() . " says " . $animal->makesound() . "<br>";
    }
}
$dog = new dog ("Buddy");
$cat = new cat ("kitty");

$printer = new printer();
$printer->print($dog);//output Buddy says woof!
$printer->print($cat);//output kitty says meeow