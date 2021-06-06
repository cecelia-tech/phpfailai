<?php

echo "<br>";
echo "1-as uzdavinys";
echo "<br>";
echo "<br>";

$masyvas = [];
foreach (range(0, 9) as $k) {
    foreach (range(0, 4) as $k2) {
        $masyvas [$k][$k2] = rand(5, 25);
    }
}
print_r($masyvas);

echo "<br>";
echo "2-as uzdavinys";
echo "<br>";
echo "<br>";

echo 'A DALIS'; 
echo "<br>";
echo "<br>";

$count = 0;
foreach ($masyvas as $key => $value) {
    foreach ($value as $key2 => $value2) {
        if ($value2 >10) {
        $count++;
    }
    }
}
echo $count;

echo "<br>";
echo "<br>";
echo 'B DALIS'; 
echo "<br>";
echo "<br>";

$max = 0;
foreach ($masyvas as $key => $value) {
    foreach ($value as $key2 => $value2) {
        if ($value2 > $max) {
        $max = $value2;
        }
    }
}

echo $max;

echo "<br>";
echo "<br>";
echo 'C DALIS'; 
echo "<br>";
echo "<br>";

//_d($masyvas);  
$reiksme = 0;
 foreach (range(1, 5) as $key => $value) {
     foreach (range(1, 10) as $key2 => $value2) {
         $reiksme += $masyvas[$key2][$key];
         
     }
     echo $reiksme. "<br>";
     $reiksme = 0;
 }

 echo "<br>";
echo "<br>";
echo 'D DALIS'; 
echo "<br>";
echo "<br>";

foreach ($masyvas as $key => $value) {
    foreach (range(1, 7) as $value2) {
    $masyvas[$key][] = rand(5, 25);
}
}

print_r($masyvas);
//_d($masyvas);

 echo "<br>";
echo "<br>";
echo 'E DALIS'; 
echo "<br>";
echo "<br>";

$sudetinisMasyvas = [];

foreach ($masyvas as $key => $value) {
    foreach ($value as $key2 => $value2) {
         $reiksme += $value2;
    }
    $sudetinisMasyvas[] = $reiksme;
}

print_r($sudetinisMasyvas);

echo "<br>";
echo "<br>";
echo "3-ias uzdavinys";
echo "<br>";
echo "<br>";

$raides = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

$masyvas2 = [];
foreach (range(1, 10) as $key => $value) {
    foreach (range(1, rand(2, 20)) as $key2 => $value2) {
        $masyvas2 [$key][$key2] = $raides[rand(0, count($raides) - 1)];
    }
}

print_r($masyvas2);
_d($masyvas2);

foreach ($masyvas2 as $key => $value) {
    // foreach ($value as $key2 => $value2) {
    //     sort($masyvas2 [$key]);
    // }
    sort($masyvas2[$key]);
}

print_r($masyvas2);