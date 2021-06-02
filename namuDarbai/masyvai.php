<?php

echo "<br>";
echo "1-as uzdavinys";
echo "<br>";
echo "<br>";

$masyvas = array_fill(0, 30, 0);

foreach ($masyvas as $key => &$value) {
    $value = rand(5, 25);
}
unset($value);

print_r($masyvas);

echo "<br>";
echo "2-as uzdavinys";
echo "<br>";
echo "<br>";

echo 'A DALIS'; 
echo "<br>";
echo "<br>";

$count = 0;
foreach ($masyvas as $indexas => $skaicius) {
    if ($skaicius >10) {
        $count++;
    }
}

echo 'Skaiciu, didesniu uz 10 yra: ' . $count;

echo "<br>";
echo "<br>";
echo 'B DALIS'; 
echo "<br>";
echo "<br>";

$maxValue = $masyvas[0];
$maxValueIndex = 0;
foreach ($masyvas as $indexas => $skaicius) {
    if ($skaicius >  $maxValue) {
        $maxValue = $skaicius;
        $maxValueIndex = $indexas;
    }
}

echo 'Max reiksme: ' . ' ' . $maxValue;
echo "<br>";
echo "<br>";
echo 'Max reiksmes indeksas: ' . ' ' . $maxValueIndex;

echo "<br>";
echo "<br>";
echo 'C DALIS'; 
echo "<br>";
echo "<br>";

$lyginiuIndeksuReiksmiuSuma = 0;
foreach ($masyvas as $indexas => $skaicius) {
    if ($indexas % 2 === 0) {
        $lyginiuIndeksuReiksmiuSuma += $skaicius;
    }
}
echo 'Lyginiu indeksu reiksmiu suma yra:    ' . $lyginiuIndeksuReiksmiuSuma;


echo "<br>";
echo "<br>";
echo 'D DALIS'; 
echo "<br>";
echo "<br>";

$naujasMasyvas = [];

foreach ($masyvas as $indexas => $skaicius) {
    $naujasMasyvas [] = ($skaicius - $indexas);
}

echo 'Naujas masyvas su seno masyvo reiksmem minus indeksas';
echo "<br>";
print_r($naujasMasyvas);

echo "<br>";
echo "<br>";
echo 'E DALIS'; 
echo "<br>";
echo "<br>";

$masyvas = array_pad($masyvas, 40, 0);
//$f = array_fill(0, 10, 0);

//$f = array_fill(0, 5, rand(0, 10));
foreach ($masyvas as $key => $value) {
    if ($key > 29) {
        $masyvas[$key] = rand(5, 25);
    }
}
print_r($masyvas);

echo "<br>";
echo "<br>";
echo 'F DALIS'; 
echo "<br>";
echo "<br>";

$porinisMasyvas = [];
$nePorinisMasyvas = [];

foreach ($masyvas as $key => $value) {
    if ($key % 2 === 0) {
        $porinisMasyvas[] = $value;
    } else {
        $nePorinisMasyvas[] = $value;
    }
}
echo 'Porinis masyvas' . "<br>";
print_r($porinisMasyvas);
echo "<br>";
echo "<br>";
echo 'Ne porinis masyvas' . "<br>";
print_r($nePorinisMasyvas);

echo "<br>";
echo "<br>";
echo 'G DALIS'; 
echo "<br>";
echo "<br>";

foreach ($nePorinisMasyvas as $key => &$value) {
    if ($key % 2 === 0) {
        if ($value > 15) {
            $value = 0;
        }
    }
}
unset($value);

print_r($nePorinisMasyvas);

echo "<br>";
echo "<br>";
echo 'H DALIS'; 
echo "<br>";
echo "<br>";
$boolean = true;
foreach ($masyvas as $key => $value) {
    
    if ($value > 10 && $boolean == true) {
        echo "Pirmo skaiciaus, kurio reiksme didesne uz 10 indeksas yra " .$key . ", o reiksme yra " . $value;
        $boolean = false;
    }
}

echo "<br>";
echo "<br>";
echo 'I DALIS'; 
echo "<br>";
echo "<br>";

foreach ($masyvas as $key => $value) {
    if ($key % 2 === 0) {
        unset($masyvas[$key]);
    }
}

print_r($masyvas);

echo "<br>";
echo "<br>";
echo "3-ias uzdavinys";
echo "<br>";
echo "<br>";

$raides = ['A', 'B', 'C', 'D'];
$raidziuMasyvas = array_fill(0, 200, 0);
$a = 0;
$b = 0;
$c = 0;
$d = 0;

foreach ($raidziuMasyvas as $key => &$value) {
    $value = $raides[rand(0, count($raides)-1)];
    if ($value === 'A') {
        $a++;
    } elseif ($value === 'B') {
        $b++;
    } elseif ($value === 'C') {
        $c++;
    } else {
        $d++;
    }
}

unset($value);

print_r($raidziuMasyvas);
echo "<br>";
echo "<br>";
echo "A pasikartojo $a kartus, B - $b, C - $c, D - $d.";

echo "<br>";
echo "<br>";
echo "4-as uzdavinys";
echo "<br>";
echo "<br>";

asort($raidziuMasyvas);

print_r($raidziuMasyvas);

echo "<br>";
echo "<br>";
echo "5-as uzdavinys";
echo "<br>";
echo "<br>";

$raides = ['A', 'B', 'C', 'D'];
$raidziuMasyvas1 = array_fill(0, 200, 0);

foreach ($raidziuMasyvas1 as $key => &$value) {
    $value = $raides[rand(0, count($raides)-1)];
}
unset($value);

$raidziuMasyvas2 = array_fill(0, 200, 0);

foreach ($raidziuMasyvas2 as $key => &$value) {
    $value = $raides[rand(0, count($raides)-1)];
}
unset($value);

$raidziuMasyvas3 = array_fill(0, 200, 0);

foreach ($raidziuMasyvas3 as $key => &$value) {
    $value = $raides[rand(0, count($raides)-1)];
}
unset($value);

$didelisMasyvas = [];

foreach ($raidziuMasyvas1 as $key => $value) {
    $didelisMasyvas[] = $value . $raidziuMasyvas2[$key] . $raidziuMasyvas3[$key];
}

print_r($didelisMasyvas);


$valuesCount = array_count_values($didelisMasyvas);
$nesikartojanciosReiksmes = [];
foreach ($valuesCount as $key => $value) {
    if ($value === 1) {
        $nesikartojanciosReiksmes[] = $key;
    }
}
echo "<br>";
echo "<br>";
 echo "Nesikartojancios reiksmes <br>";
echo "<br>";

print_r($nesikartojanciosReiksmes);
echo "<br>";
echo "<br>";
echo "Visos reiksmes <br>";

print_r(array_keys($valuesCount));

//PLACE FOR IMPROVEMENT

// $unikaliosReiksmes = [];
// $unikaliosReiksmesCount = 0;
// foreach ($didelisMasyvas as $key => $value) {

//     if (!(in_array($value, $unikaliosReiksmes))) {
//             $unikaliosReiksmes[] = $value;
//             $unikaliosReiksmesCount++;
//         }
    // foreach ($unikaliosReiksmes as $key2 => $value2) {
    //     if (!(in_array($value, $unikaliosReiksmes))) {
    //         $unikaliosReiksmes[] = $value;
    //     }
    // }
//}
// echo 'unikalios reiksmes:    ';
// print_r($unikaliosReiksmes);
// echo "<br>";
// echo "<br>";
// echo "Ju is viso yra $unikaliosReiksmesCount";
// echo "<br>";
// echo "<br>";

//print_r($didelisMasyvas);


echo "<br>";
echo "<br>";
echo "6-as uzdavinys";
echo "<br>";
echo "<br>";

$skaiciuMasyvas1 = range(100, 999);
$skaiciuMasyvas2 = array_fill(0, 100, 0);

// foreach ($skaiciuMasyvas1 as $key => &$value) {
//     //$skaicius = rand(100, 999);
//     if (!(in_array($skaicius, $skaiciuMasyvas1))) {
//             $value = $skaicius;
//         }
// }
// unset($value);

print_r($skaiciuMasyvas1);