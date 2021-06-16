<?php
$id = $_GET['id'] ?? 0;
foreach ($boxes as &$box) {
    if ($box['id'] == $id) {
        // validation
        if ($box['amount'] < (int) $_POST['amount']) {
            setMessage('tiek agurku dezej nera');
            redirectToAction('rem', $id);
        }
        $box['amount'] -= (int) $_POST['amount'];
        file_put_contents(__DIR__.'/boxes.json', json_encode($boxes));
        setMessage($_POST['amount'] . 'agurkai isimti');
        redirect();
    }
}