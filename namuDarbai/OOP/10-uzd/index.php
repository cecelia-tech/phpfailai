<?php

include __DIR__. '/Tenisininkas.php';
$zaidejas = new Tenisininkas('Rob');
$zaidejas2 = new Tenisininkas('Bob');
Tenisininkas::$zaidejas1 = $zaidejas;
Tenisininkas::$zaidejas2 = $zaidejas2;
// $zaidejas = Tenisininkas::getZaideja('Rob');
// $zaidejas2 = Tenisininkas::getZaideja('Bob');
//Tenisininkas::$zaidejas1 =
//$zaidejas3 = Tenisininkas::getZaideja('John');
//Tenisininkas::$zaidejas1 = $zaidejas;
//Tenisininkas::set(new Tenisininkas('Rob'));
echo "<pre>";
//var_dump(Tenisininkas::$zaidejas1);
var_dump($zaidejas);
var_dump($zaidejas2);
echo "<br>";
//_d($zaidejas->arTuriKamuoliuka());
//echo "<h1>" .  $zaidejas1->arTuriKamuoliuka() . "</h1>";
//echo Tenisininkas::$zaidejas1->{kamuoliukas};
//_d(Tenisininkas::$zaidejas1->arTuriKamuoliuka());
//echo Tenisininkas::$zaidejas1;
//echo Tenisininkas::getZaidejas();