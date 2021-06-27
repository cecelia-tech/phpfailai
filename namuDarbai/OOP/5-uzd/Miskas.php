<?php
class Miskas {
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    protected function papasakok()
    {
        return "<h3>Aš gyvenu miške pavadintame ". $this->name . ", o kur tu?</h3>";
    }
}