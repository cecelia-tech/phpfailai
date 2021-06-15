<?php
session_start();

//box ['id' => 25, 'amount' => 57]

if (!file_exists(__DIR__.'/boxes.json')) {
   file_put_contents(__DIR__.'/boxes.json', json_encode([]));
}
$boxes = json_decode(file_get_contents(__DIR__.'/boxes.json', 1));


// 1 Agurku deziu saraso atvaizdavimas GET



// 2 Pridejimo atvaizdavimas GET



// 3 Pridejimo vykdymas POST
// 4 Atemimo atvaizdavimas GET 
// 5 isemimo atvaizdavimas POST
// 6 Naujos dezes pridejimo atvaizdavimas GET

if ($_GET['action'] = 'add-box' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__.'/addBox.php';
}

// 7 Naujos dezes pridejimo vykdymas GET
// 8 Dezes trynimo vykdymas POST
