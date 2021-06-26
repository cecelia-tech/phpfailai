<?php

include __DIR__. '/Miskas.php';
include __DIR__. '/Zveris.php';

$miskas = new Miskas('Ezerelio');
$zveris = new Zveris('Vilkas');
//var_dump($zveris);
$zveris->papasakok();
