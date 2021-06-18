<?php
require __DIR__. '/funkcijos.php';

$accountNr = $_GET['accountNr'] ?? 0;

foreach ($accounts as &$account) {
    if ($account['accountNr'] === $accountNr) {
        $account['likutis'] += (int) abs($_POST['sumaPrideti']);
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
        setMessage(abs($_POST['sumaPrideti']). ' pinigu prideta i ' . $account['vardas'] .' ' .$account['pavarde'] . ' saskaita');
        unset($account);
        redirect();
    }
}
