<?php
require __DIR__. '/funkcijos.php';
$accountNr = $_GET['accountNr'] ?? 0;
foreach ($accounts as $index => $account1) {
   
    if ($account1['accountNr'] == $accountNr) {
        if ($account1['likutis'] > 0 ) {
            setMessage('Saskaitos, kurioje yra lesu, istrinti negalima');
            redirect();
        } else {
        unset($accounts[$index]);
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
        setMessage('Saskaita sekmingai istrinta');
        redirect();
        }
    }
}