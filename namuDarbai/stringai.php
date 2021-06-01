<?php

echo '1-mas uzdavinys' . "<br>";
echo "<br>";

$vardas = 'Tae-oh';
$pavarde = 'Kang';

echo strlen($vardas) > strlen($pavarde)? $pavarde:$vardas;


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

$movieTitle = str_ireplace("a", "*", $movieTitle);

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
// 7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

$movieTitle2 = 'An American in Paris';
$movieTitle3 = 'Breakfast at Tiffany\'s';
$movieTitle4 = '2001: A Space Odyssey';
$movieTitle5 = 'It\'s a Wonderful Life';

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$vowels2 = "/[aeiou]/i"; 

echo str_replace($vowels, "", $movieTitle2) . "<br>";
echo str_replace($vowels, "", $movieTitle3) . "<br>";
echo preg_replace($vowels2, "", $movieTitle4) . "<br>";
echo preg_replace($vowels2, "", $movieTitle5) . "<br>";


echo "<br>";
echo "<br>";
echo '8-tas uzdavinys' . "<br>";
echo "<br>";

$episode = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
//$patern = "/ [0-9] /mgi";
echo $episode . "<br>";

echo preg_replace("/[^0-9]/",'', $episode) . "<br>";


echo "<br>";
echo "<br>";
echo '9-tas uzdavinys' . "<br>";
echo "<br>";


//Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

$string1 = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$string2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$string1Splitted = explode(" ",$string1 );
$string2Splitted = explode(" ",$string2 );
$ilgis = 0;

echo 'žodžių trumpesnių arba lygių nei 5 raidės yra:  ' . zodziuSkaiciavimas ($string1Splitted, $ilgis) . "<br>";
echo "<br>";
echo 'žodžių trumpesnių arba lygių nei 5 raidės yra:  ' . zodziuSkaiciavimas ($string2Splitted, $ilgis) . "<br>";

function zodziuSkaiciavimas ($string, $ilgis){
    $zodziai = 0;
    if (count($string) == $ilgis) {
    return;
}
if (mb_strlen($string[$ilgis]) <=5) {
    $zodziai++;
}
return $zodziai + zodziuSkaiciavimas($string, $ilgis+1);
}


echo "<br>";
echo "<br>";
echo '10-tas uzdavinys' . "<br>";
echo "<br>";

//Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

$characters = 'abcdefghijklmnopqrstuvwxyz';
$length = 4;

echo stringGenerator($characters, $length);

function stringGenerator($string1, $length){
    
    if ($length == 0) {
        return '';
    }
    $generatedString = $string1[rand(0, strlen($string1)-1)];

    return $generatedString .= stringGenerator($string1, $length - 1);
}

