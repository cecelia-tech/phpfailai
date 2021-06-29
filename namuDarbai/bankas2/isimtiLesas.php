

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Lesu isemimas</title>
</head>
<body class="fonas">
<?php include __DIR__ . '/funkcijos.php' ?>
<?php include __DIR__ . '/menu.php' ?>
<?php include __DIR__ . '/msg.php' ?>

    <h1 class="centruoti">Lesu isemimas</h1>
    <h3 class="centruoti">
    <?php 
    $accountNr = $_GET['accountNr'] ?? 0;?>
    <?php foreach ($accounts as $account) {
        if ($account['accountNr'] == $accountNr) {
        echo $account['vardas'] . " " . $account['pavarde'] . " saskaita. Saskaitoje yra " .  $account['likutis'] . " pinigu.";
        }
    } ?>
    </h3>
    <form class="centruoti" action="?veiksmas=isimtiLesas&accountNr=<?= $_GET['accountNr'] ?>" method="post">
    <input type="text" name="sumaIsimti" value="<?= $msg[1]['likutis'] ?? '' ?>">
    <button class="mygtukas" type="submit">Vykdyti</button>
    </form>
</body>
</html>
