<?php

$masyvas = [];

print_r($masyvas);
echo "<br>";
array_push($masyvas, 'aaaaa');
array_push($masyvas, 'aaaaa');
$masyvas[] = 'bbbbb'; // daugiau naudojamas


echo "<br>";
print_r($masyvas);

$masyvas[] = 'cccc'; // 

$masyvas2 = ['pele', 'kate' => 'tupi', 'suo'][rand(0, 2)];
echo "<br>";
print_r($masyvas2);
echo "<br>";

$masyvas3 = array('pele', 'kate' => 'tupi', 'suo')[rand(0, 2)]; // nenaudoti

print_r($masyvas3);
echo "<br>";

foreach ($masyvas as $key => $value) {
    echo "$key => $value" . '<br>';
}
