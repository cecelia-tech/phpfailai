<?php

// Programuotoja Zita


class Bebras {

    public $name = 'Šarikas';
    protected $color;
    private $age;


    //----------------------------------------------

    public function __A__()
    {
        echo "<h2>Aš esu brūkšnys</h2>";
    }
    
    public function __construct($color = 'Black')
    {
        $this->color = $color;
        $this->age = rand(1,10);
        echo "<h2>Construct !</h2>";
    }

    public function __destruct()
    {
        echo "<h2>Destruct !</h2>";
    }

    public function sayHello()
    {
        echo "<h2>Hello, $this->name !</h2>
        <h4>Color: $this->color</h4>
        <h4>Age: $this->age</h4>";
    }

    public function addYear()
    {
        $this->age++;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function __set($prop, $value)
    {
        if ($prop == 'age') {
            if (!is_integer($value)) {
                echo 'Petrai, tu pats asilas. Tik skiaciai';
                //excecption
                return;
            }
            if ($value > 25) {
                echo 'Petrai, tu pats asilas. Tiek bebrai negyvena';
                //excecption
                return;
            }
            $this->age = $value;
       }
       echo 'Petrai, tu pats asilas. Tu to daryti negali';
       
        // $this->$prop = $value;
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