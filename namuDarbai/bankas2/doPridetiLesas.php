<?php
require __DIR__. '/funkcijos.php';

$accountNr = $_GET['accountNr'] ?? 0;

foreach ($accounts as &$account) {
    if ($account['accountNr'] === $accountNr) {
        $account['likutis'] += $_POST['sumaPrideti'];
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
        setMessage($_POST['sumaPrideti']. ' prideta i saskaita');
        unset($account);
        redirect();
    }
}
