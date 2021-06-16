<?php
// sukuriam duombaze
if (!(file_exists(__DIR__.'/accounts.json'))) {
    file_put_contents(__DIR__.'/accounts.json', json_encode([]));
}
$accounts = json_decode(file_get_contents(__DIR__.'/accounts.json'), 1);


// 1 atvaizduoti homepage
if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/home.php';
}

// 2 log in

if ($_GET['action'] == 'sukurti' && $_SERVER['REQUEST_METHOT'] == 'POST') {
    require __DIR__. '/sukurti_saskaita.php';
}