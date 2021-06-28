<?php
require __DIR__. '/funkcijos.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // 1) rodyti forma
    // 2 atjungia user
    if (isset($_GET['logout'])) {
        unset($_SESSION['logged'], $_SESSION['vardas']);
        setMessage('Sekmingai atsijungete');
        header('Location: http://localhost/phpfailai/namuDarbai/bankas2/log-in.php');
        die;
    }
} else {
    // 2) tikrinti prisijungimo duomenis
    $darbuotojai = json_decode(file_get_contents(__DIR__.'/darbuotojai.json'), 1);
    foreach ($darbuotojai as $darbuotojas) {
        if ($darbuotojas['vardas'] == $_POST['vardas']) {
            if ($darbuotojas['slaptazodis'] == md5($_POST['slaptazodis'])) {
                $_SESSION['logged'] = 1;
                $_SESSION['vardas'] = $darbuotojas['vardas'];
                setMessage('Sekmingai prisijungete, ' .$darbuotojas['vardas']);
                header('Location: http://localhost/phpfailai/namuDarbai/bankas2/');
                die;
            }
        }
    }
    setMessage('Toks vartotojas nerastas');
    header('Location: http://localhost/phpfailai/namuDarbai/bankas2/log-in.php');
        die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Log-in</title>
</head>
<body class="fonas">
    <?php include __DIR__.'/menu.php'?>
    <?php include __DIR__.'/msg.php'?>
    <h1>Log-in</h1>
    <form action="http://localhost/phpfailai/namuDarbai/bankas2/log-in.php" method="post">
    <input type="text" name="vardas" placeholder="Vardas">
    <input type="password" name="slaptazodis" placeholder="Slaptazodis">
    <button class="mygtukas"type="submit">Log-in</button>
    </form>
</body>
</html>