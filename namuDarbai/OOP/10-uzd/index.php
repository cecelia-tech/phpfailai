<?php

require __DIR__ . '/Tenisininkas.php';


$zaidejas1 = new Tenisininkas('Rob');
$zaidejas2 = new Tenisininkas('Bob');

Tenisininkas::zaidimoPradzia();

echo '<pre>';
var_dump($zaidejas1);
var_dump($zaidejas2);

$zaidejas1->perduotiKamuoliuka();
$zaidejas2->perduotiKamuoliuka();
$zaidejas1->perduotiKamuoliuka();
$zaidejas2->perduotiKamuoliuka();
$zaidejas1->perduotiKamuoliuka();
$zaidejas2->perduotiKamuoliuka();


echo '<pre>';
var_dump($zaidejas1);
var_dump($zaidejas2);