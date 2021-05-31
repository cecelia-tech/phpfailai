<?php

echo 'Pirma uzduotis' . "<br>";
echo "<br>";
$name = 'Vita';
$surname = 'Griciute';
$dateOfBirth = 1976;
$currentYear = 2021;

$age = $currentYear - $dateOfBirth;

echo "As esu $name $surname. Man yra $age metai." . "<br>";
echo "<br>";

echo 'Antra uzduotis'. "<br>";

$skaicius1 = rand(0, 4);
$skaicius2 = rand(0, 4);
echo "<br>";
echo $skaicius1 . "<br>";
echo $skaicius2 . "<br>";
$dalmuo = 0;
if ($skaicius1 !== 0 && $skaicius2 !== 0) {
    if ($skaicius1 > $skaicius2) {
    $dalmuo = $skaicius1 / $skaicius2;
} elseif ($skaicius2 > $skaicius1) {
    $dalmuo = $skaicius2 / $skaicius1;
} elseif ($skaicius1 === $skaicius2) {
    echo 'Skaiciai yra lygus'. "<br>";
    $dalmuo = $skaicius1 / $skaicius2;
}
} else {
    echo 'Dalyba is 0 negalima';
}
echo "<br>";
echo (round($dalmuo, 2));

echo "<br>";
echo "<br>";
echo 'Trecia uzduotis'. "<br>";
echo "<br>";

$sk1 = rand(0, 25);
$sk2 = rand(0, 25);
$sk3 = rand(0, 25);

echo $sk1;
echo "<br>";
echo $sk2;
echo "<br>";
echo $sk3;
echo "<br>";
echo "<br>";

if (($sk2 > $sk1 && $sk2 < $sk3) || ($sk2 < $sk1 && $sk2 > $sk3)) {
    echo "Vidurinis skaicius yra $sk2" . "<br>";
} elseif (($sk1 > $sk2 && $sk1 < $sk3) || ($sk1 < $sk2 && $sk1 > $sk3)) {
    echo "Vidurinis skaicius yra $sk1" . "<br>";
} else {
    echo "Vidurinis skaicius yra $sk3" . "<br>";
}
echo "<br>";
echo 'Ketvirta uzduotis'. "<br>";
echo "<br>";

$krastine1 = rand(1,10);
$krastine2 = rand(1,10);
$krastine3 = rand(1,10);

if (($krastine1 + $krastine2 > $krastine3) 
    || ($krastine1 + $krastine3 > $krastine2)
    || ($krastine2 + $krastine3 > $krastine1)
) {
    echo 'Trikampi sudaryti galima';
} else {
    echo 'Trikampis nesusidaro';
}
echo "<br>";
echo "<br>";
echo 'Penkta uzduotis'. "<br>";
echo "<br>";

$kintamasis1 = rand(0, 2);
$kintamasis2 = rand(0, 2);
$kintamasis3 = rand(0, 2);
$kintamasis4 = rand(0, 2);

echo $kintamasis1 . $kintamasis2 . $kintamasis3 . $kintamasis4;
echo "<br>";

$nulisCount = 0;
$vienasCount = 0;
$duCount = 0;

if ($kintamasis1 == 0){
    $nulisCount++;
} 
if ($kintamasis1 == 1) {
    $vienasCount++;
}
if ($kintamasis1 == 2) {
    $duCount++;
}
if ($kintamasis2 === 0) {
    $nulisCount++;
}
if ($kintamasis2 === 1) {
    $vienasCount++;
}
if ($kintamasis2 === 2) {
    $duCount++;
}
if ($kintamasis3 === 0) {
    $nulisCount++;
}
if ($kintamasis3 === 1) {
    $vienasCount++;
}
if ($kintamasis3 === 2) {
    $duCount++;
}
if ($kintamasis4 === 0) {
    $nulisCount++;
}
if ($kintamasis4 === 1) {
    $vienasCount++;
}
if ($kintamasis4 === 2) {
    $duCount++;
}

echo "Nulis pasikartojo $nulisCount kartus/a" . "<br>";
echo "Vienas pasikartojo $vienasCount kartus/a" . "<br>";
echo "Du pasikartojo $duCount kartus/a" . "<br>";

echo "<br>";
echo 'Sesta uzduotis'. "<br>";

$atsitiktinisSkaicius = rand(1, 6);

echo "<h$atsitiktinisSkaicius>$atsitiktinisSkaicius</h$atsitiktinisSkaicius>";

echo 'Septinta uzduotis'. "<br>";
$skaicius1 = rand(-10, 10);
$skaicius2 = rand(-10, 10);
$skaicius3 = rand(-10, 10);

if ($skaicius1 < 0) {
    echo "<p style='color: green;'>$skaicius1</p> ";
}
if ($skaicius1 === 0) {
    echo "<p style ='color: red;'>$skaicius1</p> ";
}
if ($skaicius1 > 0) {
    echo "<p style ='color: blue;'>$skaicius1</p> ";
}
if ($skaicius2 < 0) {
    echo "<p style='color: green;'>$skaicius2</p> ";
}
if ($skaicius2 === 0) {
    echo "<p style ='color: red;'>$skaicius2</p> ";
}
if ($skaicius2 > 0) {
    echo "<p style ='color: blue;'>$skaicius2</p> ";
}
if ($skaicius3 < 0) {
    echo "<p style='color: green;'>$skaicius3</p> ";
}
if ($skaicius3 === 0) {
    echo "<p style ='color: red;'>$skaicius3</p> ";
}
if ($skaicius3 > 0) {
    echo "<p style ='color: blue;'>$skaicius3</p> ";
}

echo 'Astunta uzduotis'. "<br>";

$zvakiuKiekis = rand(5, 3000);
$zvakesKaina = 1;
$moketinaSuma = $zvakesKaina * $zvakiuKiekis;

if ($moketinaSuma >= 1000 && $moketinaSuma < 2000) {
    $zvakesKaina = 1 * 0.97;
    //$moketinaSuma = $zvakiuKiekis * $zvakesKaina;
    
} elseif ($moketinaSuma >= 2000) {
    $zvakesKaina = 1 * 0.96;
    //$moketinaSuma = $zvakiuKiekis * $zvakesKaina;
} 

echo $zvakiuKiekis. "<br>";
echo $zvakesKaina. "<br>";

echo 'Devinta uzduotis'. "<br>";
echo "<br>";

$skaicius1 = rand(0, 100);
$skaicius2 = rand(0, 100);
$skaicius3 = rand(0, 100);
$average = 0;

echo "Skaicius1: $skaicius1" . "<br>";
echo "Skaicius2: $skaicius2" . "<br>";
echo "Skaicius3: $skaicius3" . "<br>";
//3 yra skaiciu kiekis
echo round(($skaicius1 + $skaicius2 + $skaicius3) / 3, 0);
echo "<br>";


if ($skaicius1 < 10 || $skaicius1 > 90) {
    if ($skaicius2 < 10 || $skaicius2 > 90) {
        if ($skaicius3 < 10 || $skaicius3 > 90) {
            echo 'Visi skaiciai atkrito';
        } else {
            $average = $skaicius3 / 1;
            echo round($average, 0);
        }
    }elseif ($skaicius3 < 10 || $skaicius3 > 90) {
        $average = $skaicius2 / 1;
        echo round($average, 0);
    }else {
        $average = ($skaicius2 + $skaicius3) / 2;
        echo round($average, 0);
    }
} elseif ($skaicius2 < 10 || $skaicius2 > 90) {
    if ($skaicius3 < 10 || $skaicius3 > 90) {
        $average = $skaicius1 / 1;
        echo round($average, 0);
    } else {
        $average = ($skaicius1 + $skaicius3) / 2;
        echo round($average, 0);
    }
} elseif ($skaicius3 < 10 || $skaicius3 > 90) {
    $average = ($skaicius1 + $skaicius2) / 2;
    echo round($average, 0);
} 


echo "<br>";
echo 'Desimta uzduotis'. "<br>";
echo "<br>";

$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);
$papildomosSekundes = rand(0, 300);

echo $valandos . ':' . $minutes . ':' . $sekundes;
echo "<br>";
echo $papildomosSekundes;
echo "<br>";

if ($papildomosSekundes % 60 > 0) {
   $liekana = $papildomosSekundes % 60;
   $papildomosMinutes = ($papildomosSekundes - ($liekana)) / 60;
   if ($sekundes + $liekana > 60) {
       $minutes++;
       $sekundes = ($sekundes + $liekana) - 60;
   } else {
       $sekundes += $liekana;
   }
   if ($minutes + $papildomosMinutes > 60) {
       $valandos++;
       $minutes = ($minutes + $papildomosMinutes) - 60;
   } else {
       $minutes += $papildomosMinutes;
   }
   if ($valandos > 24) {
       $valandos = 00;
   }
} else {
    if ($minutes + ($papildomosSekundes / 60) > 60) {
        $valandos++;
        $minutes = ($minutes + $papildomosMinutes) - 60;
    } else {
        $minutes += ($papildomosSekundes / 60);
    }
    if ($valandos >24) {
       $valandos = 00;
   }
}
echo $valandos . ':' . $minutes . ':' . $sekundes;

echo "<br>";
echo "<br>";
echo 'Vienuolikta uzduotis'. "<br>";
echo "<br>";

$sk1 = rand(1000,9999);
$sk2 = rand(1000,9999);
$sk3 = rand(1000,9999);
$sk4 = rand(1000,9999);
$sk5 = rand(1000,9999);
$sk6 = rand(1000,9999);

$temp = 0;


if ($sk1 > $sk2) {
    $temp = $sk1; $sk1 = $sk2; $sk2 = $temp;
}
if ($sk1 > $sk3) {
    $temp = $sk1; $sk1 = $sk3; $sk3 = $temp;
}
if ($sk1 > $sk4) {
    $temp = $sk1; $sk1 = $sk4; $sk4 = $temp;
}
if ($sk1 > $sk5) {
    $temp = $sk1; $sk1 = $sk5; $sk5 = $temp;
}
if ($sk1 > $sk6) {
    $temp = $sk1; $sk1 = $sk6; $sk6 = $temp;
}
if ($sk2 > $sk3) {
    $temp = $sk2; $sk2 = $sk3; $sk3 = $temp;
}
if ($sk2 > $sk4) {
    $temp = $sk2; $sk2 = $sk4; $sk4 = $temp;
}
if ($sk2 > $sk5) {
    $temp = $sk2; $sk2 = $sk5; $sk5 = $temp;
}
if ($sk2 > $sk6) {
    $temp = $sk2; $sk2 = $sk6; $sk6 = $temp;
}
if ($sk3 > $sk4) {
    $temp = $sk3; $sk3 = $sk4; $sk4 = $temp;
}
if ($sk3 > $sk5) {
    $temp = $sk3; $sk3 = $sk5; $sk5 = $temp;
}
if ($sk3 > $sk6) {
    $temp = $sk3; $sk3 = $sk6; $sk6 = $temp;
}
if ($sk4 > $sk5) {
    $temp = $sk4; $sk4 = $sk5; $sk5 = $temp;
}
if ($sk4 > $sk6) {
    $temp = $sk4; $sk4 = $sk6; $sk6 = $temp;
}
if ($sk5 > $sk6) {
    $temp = $sk5; $sk5 = $sk6; $sk6 = $temp;
}

echo $sk1 . ' ' . $sk2 . ' ' . $sk3 . ' ' . $sk4 . ' ' . $sk5 . ' ' . $sk6 . "<br>";