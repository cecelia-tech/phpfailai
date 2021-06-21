<?php
require __DIR__. '/funkcijos.php';

$sumaPrideti = $_POST['sumaPrideti'];
$accountNr = $_GET['accountNr'] ?? 0;

foreach ($accounts as &$account) {
    if ($account['accountNr'] === $accountNr) {
        if (is_string($sumaPrideti) && strlen($sumaPrideti) !== 0 ) {
            $sumaPrideti = str_replace(',', '.', $_POST['sumaPrideti'] );
        }
        if (strlen($sumaPrideti) === 0 ) {
            setMessage('Iveskite norima suma.');
            redirectToAction($_GET['veiksmas'], $account['accountNr']);
        } 
        elseif (!is_numeric($sumaPrideti)) {
            setMessage('Laukelyje turi buti ivedama tik skaiciai');
            redirectToAction($_GET['veiksmas'], $account['accountNr']);
        }
        else {
        $account['likutis'] += round((float) abs($sumaPrideti), 2);
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
        setMessage(abs($sumaPrideti). ' pinigai prideta i ' . $account['vardas'] .' ' .$account['pavarde'] . ' saskaita');
        unset($account);
        redirect();
        }
    }
}
