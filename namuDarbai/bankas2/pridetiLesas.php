<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesu inesimas</title>
</head>
<body>
<?php include __DIR__ . '/menu.php' ?>
    <h1>Prideti lesas</h1>
    <h3>
    <?php 
    $accountNr = $_GET['accountNr'] ?? 0;
    foreach ($accounts as $account) {
        if ($account['accountNr'] == $accountNr) {
        echo $account['vardas'] . " " . $account['pavarde'] . " saskaita. Saskaitoje yra " .  $account['likutis'] . " pinigu.";
        }
    } ?>
    </h3>
    <form action="?veiksmas=pridetiLesas&accountNr=<?= $_GET['accountNr'] ?>" method="post">
    <input type="text" name="sumaPrideti">
    <button type="submit">Vykdyti</button>
    </form>
</body>
</html>