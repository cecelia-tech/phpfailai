<?php

echo "<br>";
echo "1-as uzdavinys";
echo "<br>";
echo "<br>";

function tekstas($t){
echo "<h1> $t </h1>";
}
tekstas('abcdef');

echo "<br>";
echo "2-as uzdavinys";
echo "<br>";
echo "<br>";

$tagoNr = rand(1, 6);

function tekstas2($zodis, $tagoNumeris){
echo "<h$tagoNumeris> $zodis </h$tagoNumeris>";
}
tekstas2('abcdef', $tagoNr);

echo "<br>";
echo "3-ias uzdavinys";
echo "<br>";
echo "<br>";

$stringas = md5(time());
echo $stringas;

function FunctionName(Type $var = null)
{
    # code...
}

echo "<br>";
echo "4-as uzdavinys";
echo "<br>";
echo "<br>";

function dalijasiBeLiekanos($skaicius)
{   if (!(is_int($skaicius))) {
        return 'Skaicius turi buti sveikasis skaicius';
    } 
    $daliklis = 2;
    $count = 0;
    foreach (range(1, $skaicius) as $key => $value) {
        
        if ($skaicius % $daliklis === 0 && $daliklis < $skaicius) {
            //echo $daliklis . "<br>";
            $count++;
        }
        $daliklis++;
    }
    return $count;
}
echo 'Skaicius dalinasi is ' . dalijasiBeLiekanos(17) . ' skaiciu be liekanos';

echo "<br>";
echo "5-as uzdavinys";
echo "<br>";
echo "<br>";

$masyvas = [];

foreach (range(1, 5) as $key => $value) {
    $masyvas[] = rand(2, 20);
}
print_r($masyvas);
echo "<br>";
usort($masyvas, function($a, $b){
    
    return  dalijasiBeLiekanos($b)<=>dalijasiBeLiekanos($a) ;
});
print_r($masyvas);

echo "<br>";
echo "6-as uzdavinys";
echo "<br>";
echo "<br>";

$masyvas2 = [];

foreach (range(1, 10) as $key => $value) {
    $masyvas2[] = rand(2, 20);
}
echo 'Pilnas masyvas: ';
print_r($masyvas2);
echo "<br>";
echo "<br>";

foreach ($masyvas2 as $key => $value){
    if (dalijasiBeLiekanos($value) === 0) {
        unset($masyvas2[$key]);
    }
}
echo 'Pirminiai skaiciai pasalinti: ';
print_r($masyvas2);

echo "<br>";
echo "7-as uzdavinys";
echo "<br>";
echo "<br>";

$masyvas3 = [];

function FunctionName2($m)
{ static $kartai = 0;
  static $kiekKartu = rand(3, 6);

  if ($kartai <= $kiekKartu) {
      foreach (range(1, rand(10, 20)) as $key => $value) {
        if ($key === count($m)-2) {
            $kartai++;
            $m2 = [];
            $m[$key] = FunctionName2($m2);
        } else {
            $m[] = rand(0, 10);
        }
    }
  } else {
      return 0;
  }
return $m;
}
_d(FunctionName2($masyvas3));
echo "<br>";
echo "8-as uzdavinys";
echo "<br>";
echo "<br>";




echo "<br>";
echo "9-as uzdavinys";
echo "<br>";
echo "<br>";

$masyvas4 = [];

foreach (range(1, 3) as $key => $value) {
    $masyvas4[] = rand(1, 33);
}

function trysPaskutiniaiSkaiciaiNelyginiai($skaiciuMasyvas)
{ 
    if (dalijasiBeLiekanos($skaiciuMasyvas[count($skaiciuMasyvas)-1]) === 0 ||
        dalijasiBeLiekanos($skaiciuMasyvas[count($skaiciuMasyvas)-2]) === 0 ||
        dalijasiBeLiekanos($skaiciuMasyvas[count($skaiciuMasyvas)-3]) === 0
    ) {
        $skaiciuMasyvas[] = rand(1, 33);
        $skaiciuMasyvas = trysPaskutiniaiSkaiciaiNelyginiai($skaiciuMasyvas);
    }
return $skaiciuMasyvas;
}

//_d(trysPaskutiniaiSkaiciaiNelyginiai($masyvas4));



echo "<br>";
echo "10-as uzdavinys";
echo "<br>";
echo "<br>";

//SUKUREM MASYVA
$masyvas5 = [];
foreach (range(1, 10) as $key => $value) {
    foreach (range(1, 10) as $key2 => $value2) {
    $masyvas5 [$key] [$key2] = rand(1, 100);
}
}

// foreach ($masyvas5 as $key => $value) {
//     echo min($value);
// }


// _d($masyvas5);
//SURASTI PIRMINIU SKAICIU VIDURKI IS VISO MASYVO

function vidurkis($sudarytasMasyvas){
$pirminiuSkaiciuSuma = 0;
$pirminiuSkaiciuCount = 0;
foreach ($sudarytasMasyvas as $key => $value) {
    foreach ($value as $key2 => $value2) {
        if (dalijasiBeLiekanos($value2) === 0) {
            //echo $value2 . "<br>";
            $pirminiuSkaiciuSuma += $value2;
            $pirminiuSkaiciuCount++;
        }
        
    }
}
$min = 100;
$indeksas = [];
if ($pirminiuSkaiciuSuma/$pirminiuSkaiciuCount < 70) {
    foreach ($sudarytasMasyvas as $key => $value) {
        foreach ($value as $key2 => $value2) {
            if ($value2 < $min) {
                $min = $value2;
                $indeksas = [$key, $key2];
            }
        }
    }
    $sudarytasMasyvas[$indeksas[0]][$indeksas[1]] += 3;
    $pirminiuSkaiciuSuma = 0;
    $pirminiuSkaiciuCount = 0;
    vidurkis($sudarytasMasyvas);
}

return $sudarytasMasyvas;
}
//_d(vidurkis($masyvas5));
//print_r(vidurkis($masyvas5));



$pirminiuSkaiciuSuma2 = 0;
$pirminiuSkaiciuCount2 = 0;
foreach ($masyvas5 as $key => $value) {
    foreach ($value as $key2 => $value2) {
        if (dalijasiBeLiekanos($value2) === 0) {
            //echo $value2 . "<br>";
            $pirminiuSkaiciuSuma2 += $value2;
            $pirminiuSkaiciuCount2++;
        }
    }
}
echo $pirminiuSkaiciuSuma2;
echo "<br>";
echo "<br>";
echo $pirminiuSkaiciuCount2;
echo "<br>";
echo "<br>";
echo $pirminiuSkaiciuSuma2/$pirminiuSkaiciuCount2;