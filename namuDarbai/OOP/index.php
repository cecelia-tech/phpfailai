<?php

require __DIR__. '/Kibiras1.php';
require __DIR__. '/Pinigine.php';

$kibiras = new Kibiras1;

$kibiras->prideti1Akmeni();
$kibiras->prideti1Akmeni();

echo "<h4> Kiek pririnkta akmenu pridejus po viena</h4>";
echo $kibiras->kiekPririnktaAkmenu();

$kibiras->pridetiDaugAkmenu(7);

echo "<h4>Kiek pririnkta akmenu pridejus daug</h4>";
echo $kibiras->kiekPririnktaAkmenu();
echo "<br>";


// =========PINIGINE==========

$pinigine = new Pinigine;

$pinigine->ideti(1);
$pinigine->ideti(6);

echo '<h4>Pinigines bendra suma:</h4>';
echo $pinigine->skaiciuoti();