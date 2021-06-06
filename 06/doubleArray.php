<?php
$masyvas = [];
foreach (range(1, 10) as $keyBig) {
    foreach (range(1, 5) as $keyBig) {
        $masyvas[$keyBig][$keyBig] = rand(5, 25);
    }
}

print_r($masyvas);

foreach ($masyvas as $value) {
    foreach ($value as $value2) {
        
    }
}