<?php

// Programuotoja Zita

class Bebras {

    public $name = 'Šarikas';
    protected $color = 'brown';
    private $age = 14;

    //----------------------------------------------

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
}