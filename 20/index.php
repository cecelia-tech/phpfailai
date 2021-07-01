<?php
namespace Kaunas;

use Kaunas\Animal;
use Australija\Animal as AnimalA;
use Belgija\Animal as AnimalB;

require __DIR__.'/vendor/autoload.php';

// spl_autoload_register(function ($class) {
//     echo "<h3>1. Nerandu classes $class</h3>";
//     require __DIR__. '/australai/Animal.php';
// });
// spl_autoload_register(function ($class) {
//     echo "Nerandu classes $class";
//     require __DIR__. '/australai/Animal.php';
// });

// require __DIR__. '/belgai/Animal.php';
// require __DIR__. '/Animal.php';


echo Animal::$hello;
//$kaunasAnimal = new Animal;
echo AnimalA::$go;
//$australijaAnimal = new AnimalA;
echo AnimalB::$go;
//$belgijaAnimal = new AnimalB;
// $belgijaAnimal = new Belgija\Animal;