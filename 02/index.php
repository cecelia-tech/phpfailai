<?php

$trecias = 5;
$ketvirtas = $trecias % 3;


echo $ketvirtas;
echo '<br>';

echo ++$trecias;
echo '<br>';
echo $trecias;
echo '<br>';
$sk = 1;

echo ++$sk * $sk++;
// 2 * 2

echo $sk++ * $sk++;
// 1 * 2

echo $sk++ * ++$sk;
// 1 * 3

echo ++$sk * ++$sk;
// 2 * 3

// $ketvirtas = $ketvirtas + 5;
// $ketvirtas += 5;
$ketvirtas += 5;

echo '<br>';
echo $ketvirtas;
echo '<br>';


$pirmas = 'bla bla';
$antras = 'ku kū';
$trecias = $pirmas .' '. $antras;

echo '<br>';


echo $trecias;


$pirmas = 'bla bla';
$antras = "ku kū \n\n\n\n\n\n\n\n\n\n";


echo '<br>';
echo $antras;
echo $trecias;


$pirmas = 'antras';
$antras = 'bla_bla';


$bla_bla = 'Valio!';

echo '<br>';echo '<br><hr>';echo '<br><pre>';

echo $$$pirmas;
echo '<br>';

var_dump('裡');

/*

Jonas ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Jonas surenka taškų kiekį nuo 5 iki 25. Išvesti žaidėjų vardus su taškų kiekiu ir
“Laimėjo: laimėtojo vardas”;
Taškų kiekį generuokite funkcija rand();
*/
echo '<br>';
echo 'namu darbas';
echo '<br>';
$jonas = rand(5, 25);
$petras = rand(10, 20);


echo "$jonas - $petras";

if ($jonas > $petras) {
    echo '<h1> Jonas laimejo</g1>';
    echo '<br>';
}elseif ($jonas < $petras) {
    echo '<h1> Petras laimejo</g1>';
    echo '<br>';
}
else {
    echo '<h1> Lygiosios</g1>';
    echo '<br>';
}