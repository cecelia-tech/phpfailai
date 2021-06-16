<?php
$box = ['id' => rand(10000000, 99999999), 'amount' => 0]; // be garantiju unikalumui
$boxes[] = $box;
//print_r( $boxes);
file_put_contents(__DIR__.'/boxes.json', json_encode($boxes));
getMessage('Nauja deze paruosta');
redirect();