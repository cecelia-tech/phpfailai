<?php

include __DIR__. '/Tenisininkas.php';
$zaidejas = Tenisininkas::getZaideja('Rob');
$zaidejas2 = Tenisininkas::getZaideja('Bob');
//$zaidejas3 = Tenisininkas::getZaideja('John');
//Tenisininkas::$zaidejas1 = $zaidejas;
//Tenisininkas::set(new Tenisininkas('Rob'));
echo "<pre>";
//var_dump(Tenisininkas::$zaidejas1);
var_dump($zaidejas);
var_dump($zaidejas2);
echo "<br>";
echo $zaidejas->arTuriKamuoliuka();