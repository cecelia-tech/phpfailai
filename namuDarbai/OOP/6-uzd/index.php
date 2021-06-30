<?php

include __DIR__. '/Stikline.php';

$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);

echo '<pre>';
var_dump($stikline1);
var_dump($stikline2);
var_dump($stikline3);

$stikline1->ipilti(200);
echo '<h3>Spausdinam iprma stikline ipylus vandens</h3>' . "<br>";
var_dump($stikline1);
echo '<h3>Spausdinam antra stikline ipylus vandens ispilta is pirmos stiklines</h3>' . "<br>";

$stikline2->ipilti($stikline1->ispilti());

var_dump($stikline1);
var_dump($stikline2);
echo '<h3>Spausdinam trecia stikline ipylus vandens ispilta is antros stiklines</h3>' . "<br>";
$stikline3->ipilti($stikline2->ispilti());
var_dump($stikline1);
var_dump($stikline2);
var_dump($stikline3);

/* DESTYTOJO VARIANTAS KAIP PARASYT ISPYLIMA/IPILIMA GRANDINELE    **DAZNAI NAUDOJAMA**
$stikline100->ipilti($stikline150->ipilti($stikline200->ipilti(1000)->ispilti())->ispilti());
*/