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
 $zvaigzdutes2 = '';
for ($i=0; $i < 100; $i++) { 
    for ($j=0; $j < 100; $j++) { 
        $zvaigzdutes2 .= '*';
    if ($i === 99) {
        $zvaigzdutes2 .= "<br>";
        //$zvaigzdutes2 = '';
    } 
    }
}
echo $zvaigzdutes2;
