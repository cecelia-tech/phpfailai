<?php
$account = ['name' => $_POST['name'], 'surname' => $_POST['surename'], 'code' => $_POST['code'], 'accountNr' => 'LT' . generateAccountNr()]; // be garantiju unikalumui
$accounts[] = $account;

file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
//setMessage('Nauja saskaita sukurta');
//redirect();