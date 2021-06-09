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
$reiksmes = [];
$reiksme = 0;
 foreach (range(1, 5) as $key => $value) {
     foreach (range(1, 10) as $key2 => $value2) {
         $reiksme += $masyvas[$key2][$key];
     }
     $reiksmes[] = $reiksme;
     $reiksme = 0;
 }

 print_r($reiksmes);
/* 
DESTYTOJO VARIANTAS

$sums = [];

foreach ($masyvas as $index1 => $val1) {
    foreach ($val1 as $index2 => $val2) {
        $sums[$index2] = ($sums[$index2] ?? 0) + $val2;
    }
}
*/
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
/* 
KITOKS SPRENDIMAS

foreach ($masyvas as $key => $_) {
    $masyvas[$key][] = rand(5, 25);
    $masyvas[$key][] = rand(5, 25);
}

_d($masyvas, '2d');
*/
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
    $reiksme = 0;
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
echo 'Pirminis masyvas';
echo "<br>";
print_r($masyvas2);

echo "<br>";
echo "<br>";

foreach ($masyvas2 as $key => $value) {
    sort($masyvas2[$key]);
}
echo 'Surusiuotas masyvas';
echo "<br>";
print_r($masyvas2);
//_d($masyvas2);

echo "<br>";
echo "<br>";
echo "4-as uzdavinys";
echo "<br>";
echo "<br>";

usort($masyvas2, function($a, $b) {

$ak = (int) in_array('K', $a);
$bk = (int) in_array('K', $b);

if ($ak + $bk == 1) {
    return $bk <=> $ak;
}
return count($a) <=> count($b);

});

//_d($masyvas2);
print_r($masyvas2);

echo "<br>";
echo "<br>";
echo "5-as uzdavinys";
echo "<br>";
echo "<br>";

$users = [];
foreach (range(1, 30) as $key => $value) {
    $users[$key] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
}
print_r($users);
//_d($users);
/* 
DESTYTOJO SPRENDIMAS

$masyvas = [];
$count = 0;
do {
    $count++;
    $uid = rand(1, 50);
    foreach ($masyvas as $user) {
        if ($user['user_id'] == $uid) {
            continue 2;
        }
    }
    $masyvas[] = [
        'user_id' => $uid,
        'place_in_row' => rand(0, 100)
    ];
} while(count($masyvas) < 30);
*/
echo "<br>";
echo "<br>";
echo "6-as uzdavinys";
echo "<br>";
echo "<br>";

//PAGAL USER_ID DIDEJIMO TVARKA
usort($users, function($a, $b) {
    return $a['user_id'] <=> $b['user_id'];
});

_d($users);
print_r($users);

//PAGAL place_in_row MAZEJIMO TVARKA
usort($users, function($a, $b) {
    return $b['place_in_row'] <=> $a['place_in_row'];
});

_d($users);
print_r($users);

echo "<br>";
echo "<br>";
echo "7-as uzdavinys";
echo "<br>";
echo "<br>";

$name = '';
$surname = '';
$ats = [];
foreach ($users as $key => $value) {
    $name = '';
     $surname = '';
     $ats = [];
     $ns =[];
    foreach (range(1, rand(5, 15)) as $key2 => $value2) {
        $name .= chr(rand(65,90));
    }
    foreach (range(1, rand(5, 15)) as $key3 => $value3) {
        $surname .= chr(rand(65,90));
    }
 $ns[$key][] = ['name' => $name];
 $ns [$key][] = ['surname' => $surname];
      $ats = array_merge($users[$key],$ns);
    //  $users [$key] .= ['surname' => $surname];
     
}

 //_d($ats);
print_r($ats);

/* 
DESTYTOJO SPRENDIMAS

$masyvas = [];
do {
    $uid = rand(1, 50);
    foreach ($masyvas as $user) {
        if ($user['user_id'] == $uid) {
            continue 2;
        }
    }
    $masyvas[] = [
        'user_id' => $uid,
        'place_in_row' => rand(0, 100)
    ];
} while(count($masyvas) < 30);

foreach ($masyvas as &$user) {

    $user['name'] = '';
    $user['surname'] = '';
    foreach(range(1, rand(5, 15)) as $_) {
        $user['name'] .= range('a', 'z')[rand(0, 25)];
    }
    foreach(range(1, rand(5, 15)) as $_) {
        $user['surname'] .= range('a', 'z')[rand(0, 25)];
    }
}


_d($masyvas);
*/

echo "<br>";
echo "<br>";
echo "8-as uzdavinys";
echo "<br>";
echo "<br>";

/* 
galimas sprendimas

$masyvas = [];

foreach (range(1, 10) as $key1 => $_) {
    $sk = rand(0, 5);
    if ($sk == 0) {
        $masyvas[$key1] = rand(0, 10);
    } else {
        foreach (range(1, $sk) as $key2 => $_) {
            $masyvas[$key1][] = rand(0, 10); 
        }
    }
}
_d($masyvas);
*/

echo "<br>";
echo "<br>";
echo "9-as uzdavinys";
echo "<br>";
echo "<br>";

/* 
galimas sprendimas

usort($masyvas, function($a, $b) {
    $asum = 0;
    if(is_array($a)) {
        foreach($a as $value) {
            $asum += $value;
        }
        $a = $asum;
    }
    
    $bsum = 0; 
    if(is_array($b)) {
        foreach($b as $value) {
            $bsum += $value;
        }
        $b = $bsum;
    }
    return $a <=> $b;
}
);
*/