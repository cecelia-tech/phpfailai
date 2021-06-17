<?php
session_start();
// sukuriam duombaze

function generateAccountNr()
{   $number = rand(0, 9);
    foreach (range(1, 11) as $key => $value) {
        $nr .= $number;
    }
    shuffle($nr);
    return $nr;
}
function redirect() 
{
    header('Location: http://localhost/phpfailai/namuDarbai/bankas/');
    die;
}

if (!(file_exists(__DIR__.'/accounts.json'))) {
    file_put_contents(__DIR__.'/accounts.json', json_encode([]));
}
$accounts = json_decode(file_get_contents(__DIR__.'/accounts.json'), 1);


// 1 atvaizduoti homepage
if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/home.php';
}

// 2 create new account

elseif ($_GET['sukurti'] == 'create' && $_SERVER['REQUEST_METHOT'] == 'GET') {
    
    require __DIR__. '/sukurti_saskaita.php';
}

// 3 log in
elseif ($_GET['action'] == 'create' && $_SERVER['REQUEST_METHOT'] == 'POST') {
   
    require __DIR__. '/do-sukurti.php';
}