

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesu isemimas</title>
</head>
<body>
<?php include __DIR__ . '/menu.php' ?>
<?php include __DIR__ . '/funkcijos.php' ?>


    <h1>Lesu isemimas</h1>
    <?php include __DIR__ . '/msg.php' ?>
    <h3>
    <?php 
    $accountNr = $_GET['accountNr'] ?? 0;?>
    <?php foreach ($accounts as $account) {
        if ($account['accountNr'] == $accountNr) {
        echo $account['vardas'] . " " . $account['pavarde'] . " saskaita. Saskaitoje yra " .  $account['likutis'] . " pinigai.";
        }
    } ?>
    </h3>
    <form action="?veiksmas=isimtiLesas&accountNr=<?= $_GET['accountNr'] ?>" method="post">
    <input type="text" name="sumaIsimti">
    <button type="submit">Vykdyti</button>
    </form>
</body>
</html>
