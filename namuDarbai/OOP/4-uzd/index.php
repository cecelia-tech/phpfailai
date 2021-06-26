<?php

include __DIR__. '/Kibiras3.php';
include __DIR__. '/KibirasNePo1.php';

$kibirasNePo1 = new kibirasNePo1;

$kibirasNePo1->prideti1Akmeni();
echo 'Po pirmo pridejimo  ';
echo $kibirasNePo1->kiekPririnktaAkmenu();
$kibirasNePo1->prideti1Akmeni();
echo "<br>";
echo 'Po antro pridejimo  ';
echo $kibirasNePo1->kiekPririnktaAkmenu();
