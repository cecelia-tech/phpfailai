<?php

require __DIR__. '/Kibiras1.php';
require __DIR__. '/Pinigine.php';

$kibiras = new Kibiras1;
$kibiras2 = new Kibiras1;
_d($kibiras->kiekPririnktaAkmenu());
echo $kibiras->kiekVisoPririnktaAkmenu();
echo "<br>";

$kibiras->prideti1Akmeni();
$kibiras->prideti1Akmeni();

$kibiras2->prideti1Akmeni();
$kibiras2->prideti1Akmeni();
$kibiras2->prideti1Akmeni();
echo "<h4> Kiek pririnkta akmenu pridejus po viena</h4>";
echo $kibiras->kiekPririnktaAkmenu();
echo "<br>";
echo $kibiras2->kiekPririnktaAkmenu();
echo "<br>";
echo 'Kiek is viso pririnkta akemu';
echo "<br>";
echo Kibiras1::kiekVisoPririnktaAkmenu();
echo "<br>";

$kibiras->pridetiDaugAkmenu(7);
$kibiras2->pridetiDaugAkmenu(7);

echo "<h4>Kiek pririnkta akmenu pridejus daug</h4>";
echo $kibiras->kiekPririnktaAkmenu();
echo "<br>";
echo $kibiras2->kiekPririnktaAkmenu();
echo "<br>";
echo 'Kiek is viso pririnkta akemu';
echo "<br>";
echo Kibiras1::kiekVisoPririnktaAkmenu();
echo "<br>";

// =========PINIGINE==========

$pinigine = new Pinigine;

$pinigine->ideti(1.432);
$pinigine->ideti(6);

echo '<h4>Pinigines bendra suma:</h4>';
echo $pinigine->skaiciuoti();