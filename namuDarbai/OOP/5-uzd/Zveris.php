<?php
class Zveris extends Miskas{
    
    protected function papasakok()
    {echo "Aš esu žvėris vardu ". $this->name."</h3>";
        $miskas = new Miskas('Kacergines');
        return $miskas->papasakok();
    }
    public function __call($name, $argument)
    {   
        return $this->{$name}();
    }
}