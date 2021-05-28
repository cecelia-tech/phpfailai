<?php

echo 'Pirma uzduotis' . "<br>";
echo "<br>";
$name = 'Sara';
$surname = 'Smith';
$dateOfBirth = 1976;
$currentYear = 2021;

$age = $currentYear - $dateOfBirth;

echo "As esu $name $surname. Man yra $age metai." . "<br>";
echo "<br>";

echo 'Antra uzduotis'. "<br>";
echo "<br>";

$skaicius1 = rand(0, 4);
$skaicius2 = rand(0, 4);
echo "<br>";
echo $skaicius1 . "<br>";
echo $skaicius2 . "<br>";
$dalmuo = 0;
if ($skaicius1 > $skaicius2) {
    $dalmuo = $skaicius1 / $skaicius2;
} elseif ($skaicius2 > $skaicius1) {
    $dalmuo = $skaicius2 / $skaicius1;
} elseif ($skaicius1 = $skaicius2) {
    echo 'Skaiciai yra lygus'. "<br>";
    $dalmuo = $skaicius1 / $skaicius2;
} elseif ($skaicius1 == 0 or $skaicius2 == 0 ) {
    echo 'Dalyba is 0 negalima';
}else {
    echo 'Vienas arba abu skaiciai yra 0';
}



echo "<br>";
echo $skaicius1 . "<br>";
echo $skaicius2 . "<br>";
echo 'Atsakymas' . "<br>";
echo (round($dalmuo, 2));
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

if (($sk2 > $sk1 && $sk2 < $sk3) || ($sk2 < $sk1 && $sk2 > $sk3)) {
    echo "Vidurinis skaicius yra $sk2" . "<br>";
} elseif (($sk1 > $sk2 && $sk1 < $sk3) || ($sk1 < $sk2 && $sk1 > $sk3)) {
    echo "Vidurinis skaicius yra $sk1" . "<br>";
} else {
    echo "Vidurinis skaicius yra $sk3" . "<br>";
}


// elseif ($sk3 > $sk1 && $sk3 < $sk2) {
//     echo $sk3 . "<br>";
// } 
echo "<br>";
echo 'Sesta uzduotis'. "<br>";

$atsitiktinisSkaicius = rand(1, 6);

echo "<h$atsitiktinisSkaicius>$atsitiktinisSkaicius</h$atsitiktinisSkaicius>";

echo 'Septinta uzduotis'. "<br>";