<?php

$darbuotojai = [
    ['vardas' => 'Joanna', 'slaptazodis' => md5('123')],
    ['vardas' => 'Martin', 'slaptazodis' => md5('223')],
    ['vardas' => 'Simon', 'slaptazodis' => md5('323')],
];

file_put_contents(__DIR__.'/darbuotojai.json', json_encode($darbuotojai));