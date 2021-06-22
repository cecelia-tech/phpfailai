<?php

// Programuotoja Zita

class Bebras {

    public $name = 'Šarikas';
    protected $color = 'brown';
    private $age = 14;

    //----------------------------------------------
    public function __construct(){
        $this->age = rand(1, 10);
        echo "construct ";
    }
    public function sayHello()
    {
        echo "<h2>Hello, $this->name! </h2>";
        echo "<h4>Age, $this->age! </h4>";
    }
    public function addYear()
    {
        $this->age++;
    }

    public function getAge()
    {
        return $this->name;
    }
    public function __get($prop)
    {
    //    if (!in_array($prop, ['age', 'color'])) {
    //        return null;
    //    }
        if ($prop == 'color') {
            return null;
        }
        if ($prop == 'rand') {
            return $this->randomNumber();
        }

        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }

    public function __call($name, $arguments)
    {
        // return $this->randomNumber(1000);
        return $this->{$name}(...$arguments);
    }

    private function randomNumber($time)
    {
        return rand(10,99) * $time;
    }

    public function setAge($age)
    {
        if (!is_integer($age)) {
            echo 'Petrai, tu pats asilas. Tik skiaciai';
            //excecption
            return;
        }
        if ($age > 25) {
            echo 'Petrai, tu pats asilas. Tiek bebrai negyvena';
            //excecption
            return;
        }
        $this->age = $age;
    }

}
