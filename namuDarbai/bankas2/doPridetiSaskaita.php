<?php
//echo $_POST['vardas']; //turim sita sitam faile is pridetiSaskaita
include __DIR__. '/funkcijos.php';
include __DIR__. '/msg.php';

$account = ['vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'], 'accountNr' => $_POST['accountNr'], 'likutis' => 0];

if (strlen($account['vardas']) == 0 || strlen($account['pavarde']) == 0 || strlen($account['asmensKodas']) == 0) {
        setMessage('Visi laukeliai turi buti uzpildyti.');
        redirectToAction2('pridetiSaskaita', 'POST');
    }
elseif (strlen($account['vardas']) <= 3 || strlen($account['pavarde']) <= 3) {
        setMessage('Vardas ir pavarde turi buti ilgesni nei 3 simboliai.');
        redirectToAction2('pridetiSaskaita', 'POST');
    }

if (!(strlen($account['asmensKodas']) == 11)) {
        setMessage('Asmens kodas turi buti is 11 skaiciu.');
        redirectToAction2('pridetiSaskaita', 'POST');
    } elseif (!(preg_match("/^[0-9]+$/", $account['asmensKodas']))) {
        setMessage('Kodas tik is skaiciu.');
        redirectToAction2('pridetiSaskaita', 'POST');
    } elseif (!(substr($account['asmensKodas'], 0,1) > 0 && substr($account['asmensKodas'], 0,1) <7)) {
        setMessage('Pirmas skaicius turi buti nuo 0 iki 6.');
        redirectToAction2('pridetiSaskaita', 'POST');
    }
    //S = A*1 + B*2 + C*3 + D*4 + E*5 + F*6 + G*7 + H*8 + I*9 + J*1
    // foreach ($account['asmensKodas'] as $raide) {
    //     # code...
    // }
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