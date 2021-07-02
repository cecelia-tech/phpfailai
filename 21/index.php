<?php
namespace Zoo;
use Zoo\Animal;
use Australia\Animal as AnimalA;
use Belgium\Animal as AnimalB;

require __DIR__.'/vendor/autoload.php';

// require __DIR__. '/australai/Animal.php';
// require __DIR__. '/Animal.php';
// require __DIR__. '/belgai/Animal.php';

echo Animal::$hello;
// new Animal2;
echo AnimalA::$go;
// new AnimalA2;
echo AnimalB::$go;
// new AnimalB2;