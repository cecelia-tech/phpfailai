<?php

include __DIR__. '/Pinigine.php';

$pinigine = new Pinigine;

$pinigine->ideti(3.5);
$pinigine->ideti(1.5);
$pinigine->ideti(1.2);
$pinigine->ideti(7);
//echo "<pre>";
echo $pinigine->monetos() . "<br>";

echo $pinigine->banknotai();
