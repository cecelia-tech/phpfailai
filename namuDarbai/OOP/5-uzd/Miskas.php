<?php

class Miskas {
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    protected function papasakok()
    {
        echo "<h3>Aš gyvenu miške pavadintame $this->name, o kur tu?</h3>";
    }
    public function __call($name, $argument)
    {
        return $this->papasakok();
    }
}