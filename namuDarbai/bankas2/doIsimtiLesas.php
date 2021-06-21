<?php
require __DIR__. '/funkcijos.php';


$sumaIsimti = $_POST['sumaIsimti'];
$accountNr = $_GET['accountNr'] ?? 0;

foreach ($accounts as &$account) {
    if ($account['accountNr'] === $accountNr) {
        if (is_string($sumaIsimti) && strlen($sumaIsimti) !== 0 ) {
            $sumaIsimti = str_replace(',', '.', $_POST['sumaIsimti'] );
        }
        if (strlen($sumaIsimti) === 0 ) {
            setMessage('Iveskite norima suma.');
            redirectToAction('isimtiLesas', $accountNr);
        } 
        elseif (!is_numeric($sumaIsimti)) {
            setMessage('Laukelyje turi buti ivedama tik skaiciai');
            redirectToAction('isimtiLesas', $accountNr);
        } 
        elseif ($account['likutis'] < (float) abs($sumaIsimti)) {
            setMessage('Saskaitoje tiek lesu nera. Galima nuskaiciuoti suma yra ' . $account['likutis'] . " pinigai.");
            redirectToAction('isimtiLesas', $accountNr);
        }
        else {
        $account['likutis'] -= round((float) abs($sumaIsimti), 2);
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
        setMessage(abs($sumaIsimti). ' pinigai sekmingai isimta is ' . $account['vardas'] . ' ' . $account['pavarde'] . ' saskaitos');
        unset($account);
        redirect();
        }
    }
}