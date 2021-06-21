<?php
//echo $_POST['vardas']; //turim sita sitam faile is pridetiSaskaita
include __DIR__. '/funkcijos.php';
include __DIR__. '/msg.php';

$account = ['vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'], 'accountNr' => $_POST['accountNr'], 'likutis' => 0];

if (strlen($account['vardas']) <= 3 || strlen($account['pavarde']) <= 3) {
        setMessage('Vardas ir pavarde turi buti ilgesni nei 3 simboliai.');
        redirectToAction2('pridetiSaskaita', 'POST');
    }
foreach ($accounts as $account2) {
    if ($account2['asmensKodas'] === $account['asmensKodas']) {
        setMessage('Saskaita su tokiu asmens kodu jau yra sukurta');
        redirectToAction2('pridetiSaskaita', 'POST');
    }
}
$accounts[] = $account;
//print_r($account);
file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));

setMessage('Nauja saskaita sukurta');
redirect();