<?php
require __DIR__. '/funkcijos.php';


$accountNr = $_GET['accountNr'] ?? 0;

foreach ($accounts as &$account) {
    if ($account['accountNr'] === $accountNr) {
        if ($account['likutis'] < (int) abs($_POST['sumaIsimti'])) {
            setMessage('Saskaitoje tiek lesu nera. Galima nuskaiciuoti suma yra ' . $account['likutis'] . " pinigai.");
            redirectToAction('isimtiLesas', $accountNr);
        }
        $account['likutis'] -= (int) abs($_POST['sumaIsimti']);
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
        setMessage(abs($_POST['sumaIsimti']). ' pinigai sekmingai isimta is ' . $account['vardas'] . ' ' . $account['pavarde'] . ' saskaitos');
        unset($account);
        redirect();
    }
}