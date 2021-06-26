<?php

class Zveris extends Miskas{
    // protected $name2;

    // public function __construct(string $name2)
    // {
    //     $this->name2 = $name2;
    // }
    
    protected function papasakok()
    {
        echo "Aš esu žvėris vardu $this->name</h3>";
    }
    public function __call($name, $argument)
    {   parent::papasakok();
        return $this->papasakok();
    }
}