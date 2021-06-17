<?php

session_start();


// jeigu duombazs nera, ja sukuriam su tusciu masyvu
if (!(file_exists(__DIR__.'/accounts.json'))) {
    file_put_contents(__DIR__.'/accounts.json', json_encode([]));
}
$accounts = json_decode(file_get_contents(__DIR__.'/accounts.json'), 1);

// jeigu GET VEIKSMO NERA METAM I MAIN
if (!isset($_GET['veiksmas']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/main.php';
}

// SUKURIAMOS SASKAITOS ATVAIZDAVIMAS
if ($_GET['veiksmas'] == 'pridetiSaskaita' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/pridetiSaskaita.php';
}
// SUKURTOS SASKAITOS DUOMENU DEJIMAS I DUOMBAZE
if ($_GET['veiksmas'] == 'pridetiSaskaita' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doPridetiSaskaita.php';
}

// pinigu pridejimo i saskaita atvaizavimas
if ($_GET['veiksmas'] == 'pridetiLesas' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/pridetiLesas.php';
}

// PINIGU PRIDEJIMO VYKDYMAS
if ($_GET['veiksmas'] == 'pridetiLesas' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/DoPridetiLesas.php';
}

// pinigu isemimo is saskaitos atvaizavimas
if ($_GET['veiksmas'] == 'isimtiLesas' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/isimtiLesas.php';
}