<?php
echo "<br>";
echo "1-as uzdavinys";
echo "<br>";
echo "A dalis";
for ($i=0; $i < 400; $i++) {
    $zvaigzdutes .= '*';
}
echo "<p style='overflow-wrap: break-word;'>$zvaigzdutes</p>" . "<br>";
echo "<br>";
echo "B dalis";
echo "<br>";

for ($i=0; $i < 400; $i++) { 
    $zvaigzdutes2 .= '*';
    if (strlen($zvaigzdutes2) === 50) {
        echo $zvaigzdutes2 . "<br>";
        $zvaigzdutes2 = '';
    } 
}
echo "<p>$zvaigzdutes2</p>";

echo "<br>";
echo "2-as uzdavinys";
echo "<br>";
echo "<br>";

//Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150. Skaičiai didesni nei 275 turi būti raudonos spalvos.

$count = 0;
for ($i=0; $i < 300; $i++) { 
    $randomSkaicius = rand(0, 300);
    
    if ($randomSkaicius > 150) {
        $count++;
    }
    if ($randomSkaicius > 275) {
        $random .= "<span style='color: red;'>" . $randomSkaicius ."</span> " . '  ';
    }else{
    $random .= $randomSkaicius . '  ';}
}
echo $random;
echo "<br>";
echo "<br>";
echo "Skaiciu, didesniu uz 150 yra: $count";

 echo "<br>";
 echo "<br>";
echo "3-ias uzdavinys";
echo "<br>";
echo "<br>";

/* Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio
skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane. */

$randomSkaicius = rand(3000, 4000);
$stringas = '';
echo "aibe yra nuo 1 iki $randomSkaicius";
echo "<br>";
echo "<br>";

for ($i=1; $i < $randomSkaicius; $i++) { 
    if ($i % 77 === 0) {
        if (strlen($stringas) === 0) {
            $stringas .= $i ;
        } else {$stringas .= ', ' . $i ;}
    }
}
echo $stringas;

 echo "<br>";
 echo "<br>";
echo "4-as uzdavinys";
echo "<br>";
echo "<br>";

/* Nupieškite kvadratąiš“*”,kuriokraštines sudaro100“*”.Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis. */
 //$zvaigzdutes2 = '';
for ($i=0; $i < 100; $i++) { 
    for ($j=0; $j < 100; $j++) { 
        $zvaigzdutes2 .="<span style='font-size: 10px; line-height:5px;'>*</span>";
    if ($j === 99) {
        echo $zvaigzdutes2 .= "<br>";
        $zvaigzdutes2 = '';
    } 
    }
}
//echo $zvaigzdutes2;
/* 
SPRENDIMAS

echo "<div style = 'line-height: 70%;'>";

for ($i = 0; $i < 25; $i++) {
    for ($j = 0; $j < 25; $j++) {
        echo '* ';
    }

   echo "</br>";
}

'</div>';
*/

 echo "<br>";
 echo "<br>";
echo "5-as uzdavinys";
echo "<br>";
echo "<br>";
/* 
Sprendimas
<style>
  .kvadratas {
    white-space: nowrap;
  }
  .kvadratas span{
    padding: 3px;
  }
</style>

<?php
echo "<div class='kvadratas' id='kvadratas'>";
for ($i = 0 ; $i < $krastine ; $i++)
{
    
    for ($j = 0 ; $j < $krastine ; $j++)
    {
        if($i==$j){
            echo '<span class="red">* </span>';
        }
        elseif($i+$j == $krastine-1){
            echo '<span class="red">* </span>';
        }
        else {
         echo '<span>* </span>';
        }
    }
    echo '<br>';
}
echo '</div>';
echo '<hr>';

*/

 echo "<br>";
 echo "<br>";
echo "6-as uzdavinys";
echo "<br>";
echo "<br>";

/* Metam monetą.Monetos kritimo rezultatąi mituojam rand()funkcija,
kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
a) Iškritusherbui;
b) Tris kartus iškritus herbui;
c) Triskartusišeilėsiškritusherbui; */

//$metimas = rand(0, 1);

do {
    $metimas = rand(0, 1);
    if ($metimas === 0) {
        echo 'Herbas' . "<br>";
    } else
    echo 'Skaicius' . "<br>";
} while ($metimas !== 0);

echo "<br>";
echo 'Kai herbas iskrenta 3 kartus';
echo "<br>";
$count = 0;
do {
    $metimas = rand(0, 1);
   if ($metimas === 0) {
        $count++;
        echo 'Herbas' . "<br>";
    } else
    echo 'Skaicius' . "<br>";
} while ($count < 3);
echo $count;

echo "<br>";
echo 'Kai herbas iskrenta 3 kartus is eiles';
echo "<br>";
$history = [];
$boolean = true;

// for ($i=0; $i < 5; $i++) { 
//     $history[$i] .= 'U';
// }

//echo $history[1];
echo "<br>";
echo "<br>";
// if ($history[count($history)-1] == $history[count($history)-2] && $history[count($history)-2] == $history[count($history)-3] ) {
//     echo 'bbbbbb';
// }
/* do {
    $i = 0;
    $metimas = rand(0, 1);
    if ($history[count($history) -1] == $history[count($history) -2] && 
    $history[count($history) -2] == $history[count($history) -3]) {
        $boolean = false;
    }
   if ($metimas === 0) {
        $history[$i] = 'Herbas';
        //echo 'Herbas' . "<br>";
    } else
    $history[$i] = 'Skaicius';
    //echo 'Skaicius' . "<br>";
    $i++;
} while ($boolean == true);
print_r($history) ; */
/* 
TRECIOS DALIES SPRENDIMAS


*/
//echo '-------------------------';
/* Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: laimėtojo vardas”. Taškų kiekį generuokite funkcija rand(). Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba
daugiau taškų. */
echo "<br>";
 echo "<br>";
echo "7-as uzdavinys";
echo "<br>";
echo "<br>";
$petrasTaskai = 0;
$kazysTaskai = 0;
do {
    $petras = rand(10, 20);
    $petrasTaskai += $petras;
    $kazys = rand(5, 25);
    $kazysTaskai += $kazys;
    
} while ($petrasTaskai < 222 && $kazysTaskai < 222);

if ($petrasTaskai > $kazysTaskai) {
    echo 'Petras: ' . $petrasTaskai . '  ' . 'Kazys: ' . $kazysTaskai . '  ' . "Partiją laimėjo: Petras";
} else{
    echo 'Petras: ' . $petrasTaskai . '  ' . 'Kazys: ' . $kazysTaskai . '  ' . "Partiją laimėjo: Kazys";
}
echo "<br>";
echo "<br>";
/*  7 kitoks

$kscore = 0;
$pscore = 0;
while ($pscore <= 222 & $kscore <= 222) {
    $kscore += rand(5, 25);
    $pscore += rand(10, 20);
    if ($kscore > $pscore) {
        echo "Partiją laimėjo Kazys (Kazys $kscore:$pscore Petras)<br>";
    }
    if ($kscore < $pscore) {
        echo "Partiją laimėjo Petras (Petras $pscore:$kscore Kazys)<br>";
    }
    if ($kscore == $pscore) {
        echo "Lygiosios ($kscore:$pscore)<br>";
    }
}*/
/* 
8 UZDAVINYS
echo '<div class=\'rombas\'>';
$len = 21;
for($x = 0; $x < $len; $x++){
    echo '<br>';
    for($y = 0; $y < $len; $y++){
        if(($x + $y >= 10 && $x - $y <= 10) && 
           ($x + 10 >= $y) && 
           ($x + $y <= 30)){
               echo '<span style="color: rgb(',rand(0, 255),', ',rand(0, 255),', ',rand(0, 255),');">*</span>';
        }else { echo "<span style=\"opacity: 0\">_</span>"; }
    }
}
echo '</div>';



// Height and width adjustable Rhombus

$dHorizontalOfRhombus = 101;
$dVerticalOfRhombus = 30;
$diagRatio = $dVerticalOfRhombus / $dHorizontalOfRhombus;
echo '<div style="text-align:center;">';
for ($ii = 0; $ii < $dVerticalOfRhombus; $ii++) {
    for ($i = 0; $i < $dHorizontalOfRhombus; $i++) {
        if ($ii >= $diagRatio  * $i + 1 && $ii <= $diagRatio  * ($dHorizontalOfRhombus - $i) - 1) {
            echo '<span style="line-height: 3px; font-size: 16px; color: rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . ');">*</span>';
        }
    }
    echo '<span style="font-size: 1px;"><br></span>';
}
echo '</div><br>';
*/

/* 
10 UZDAVINYS
$nail_length = 85;

// 5 nails with small strikes:
$strikes = 0;
for ($i = 0; $i < 5; $i++) {
    $progress = 0;
    while ($progress < $nail_length) {
        $small_strike = rand(5, 20);
        $progress += $small_strike;
        $strikes++;
    }
}
echo "Fully hammering 5 nails with small strikes took $strikes strikes. <br>";

// 5 nails with small strikes:
$strikes = 0;
for ($i = 0; $i < 5; $i++) {
    $progress = 0;
    while ($progress < $nail_length) { 
        $big_strike = rand(20, 30);
        if (rand(0, 1) == 1) {
            $progress += $small_strike;
        }
        $strikes++;
    }
}
echo "Fully hammering 5 nails with big strikes took $strikes strikes. <br>";
*/

/* 
11 UZDAVINYS
$rand1 = [];
while (count($rand1) <= 50) {
    array_push($rand1, strval(rand(1, 200)));
    $rand1 = array_unique($rand1, SORT_NUMERIC);
}
$rand1_str = implode(" ", $rand1);

$dups = [];
foreach(array_count_values($rand1) as $val => $c)
    if($c > 1) $dups[] = $val;
$dups_str = implode(' ', $dups);
echo "Random string 1: $rand1_str <br>";
echo "Duplicates check - number of dupes in string 1: $dups_str <br>";
$rand2 = sort($rand1);
$rand2_str = '';

for ($i = 0; $i < count($rand1); $i++) {
    if (isPrime($rand1[$i]) == true) {
        $rand2_str .= strval($rand1[$i]) . ' ';
    }
}

echo "Sorted primes: $rand2_str";

function isPrime ($num) {
    $prime = false;
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num; $i++) {
        if ($num % $i == 0 && $num / $i > 1 && $num != $i) {
            $prime = false;
            break;
        }
        if ($num % $i == 0 && $num / $i == 1 && $num == $i) {
            $prime = true;
        }
    }
    return $prime;
}


KITAS SPRENDIMAS

$array = [];

while(count($array) <= 50){
$sk = rand(1,200);

if(count($array) == 0){
array_push($array, $sk);
} else {
foreach($array as $i){
if($sk === $i){
continue 2;
} 
}
array_push($array, $sk);
}
}

echo implode(" ",$array);

echo '<br>';
echo '<br>';

$new_array = [];

for($i = 0; $i < count($array); $i++){
$sk = $array[$i];
$dalikliai = 0;
for($o = 2; $o < $sk; $o++){
if($sk % $o === 0){
$dalikliai++;
}
}
if($dalikliai === 0){
array_push($new_array, $sk);
}
}

sort($new_array);

echo implode(" ",$new_array);
*/