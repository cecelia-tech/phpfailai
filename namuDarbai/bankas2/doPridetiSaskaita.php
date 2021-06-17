<?php
//echo $_POST['vardas']; //turim sita sitam faile is pridetiSaskaita
include __DIR__. '/funkcijos.php';
include __DIR__. '/msg.php';

$account = ['vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'], 'accountNr' => 'LT01'. generateAccountNr()];
$accounts[] = $account;
//print_r($account);
file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));

setMessage('Nauja saskaita sukurta');
redirect();