<?php

echo '1-mas uzdavinys' . "<br>";
echo "<br>";

$aktorius1 = 'Park Bo-young';
$aktorius2 = 'Kang Tae-oh';

echo strlen($aktorius1) > strlen($aktorius2)? $aktorius2:$aktorius1;
echo "<br>";
echo "<br>";
echo '2-as uzdavinys' . "<br>";
echo "<br>";

$aktoriausVardas = 'Bo-young';
$aktoriausPavarde = 'Park';

echo strtoupper($aktoriausVardas) . " " . $aktoriausPavarde;


echo "<br>";
echo "<br>";
echo '3-ias uzdavinys' . "<br>";
echo "<br>";
$aktoriausVardas = 'In-guk';
$aktoriausPavarde = 'Seo';
$inicialai = $aktoriausVardas[0] . $aktoriausPavarde[0];

echo $inicialai;


echo "<br>";
echo "<br>";
echo '4-tas uzdavinys' . "<br>";
echo "<br>";

$aktoriausVardas = 'Hyuk-soo';
$aktoriausPavarde = 'Lee';

$vardoPavardes3PaskutinesRaides = substr($aktoriausVardas, (strlen($aktoriausVardas) - 3)) . substr($aktoriausPavarde, (strlen($aktoriausPavarde) - 3));

echo $vardoPavardes3PaskutinesRaides;


echo "<br>";
echo "<br>";
echo '5-tas uzdavinys' . "<br>";
echo "<br>";

$movieTitle = 'An American in Paris';

$movieTitle = str_ireplace("a", "*", "An American in Paris");

echo $movieTitle;


echo "<br>";
echo "<br>";
echo '6-tas uzdavinys' . "<br>";
echo "<br>";

$movieTitle = 'An American in Paris';

echo  substr_count(strtolower($movieTitle), 'a');

echo "<br>";
echo "<br>";
echo '7-tas uzdavinys' . "<br>";
echo "<br>";

