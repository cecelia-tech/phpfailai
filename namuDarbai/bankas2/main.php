<?php
include __DIR__ . '/funkcijos.php';


if (!isset($_SESSION['logged'])) {
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
    <title>MAIN</title>
</head>
<body class="fonas">
<?php include __DIR__ . '/menu.php' ?>
<?php include __DIR__ . '/msg.php' ?>
<!-- NUORODA I NAUJA saskaita -->
    <div>
        <a class="nuorodos" href="?veiksmas=pridetiSaskaita">Prideti nauja saskaita</a>
    </div>

    <table class="centruoti" style="width:100%">
    <caption class="pavadinimas" >Vartotoju saskaitos</caption>
    <?php
     usort($accounts, function($a, $b) {
        return $a['pavarde'] <=> $b['pavarde'];
    })?>
  <tr class="lenteles-virsus">
    <th>Vardas</th>
    <th>Pavarde</th>
    <th>Asmens kodas</th>
    <th>Saskaitos numeris</th>
    <th>Saskaitos likutis</th>
    <th>Inesti lesu</th>
    <th>Issiimti lesas</th>
    <th>Istrinti saskaita</th>
  </tr>
  <?php foreach ($accounts as $account) :?>
  <tr class="lenteles-vidus">
    <td><?=$account['vardas']?></td>
    <td><?=$account['pavarde']?></td>
    <td><?=$account['asmensKodas']?></td>
    <td><?=$account['accountNr']?></td>
    <td><?=$account['likutis']?></td>
    <td>[<a href="?veiksmas=pridetiLesas&accountNr=<?= $account['accountNr'] ?>">Pridėti</a>]</td>
    <td>[<a href="?veiksmas=isimtiLesas&accountNr=<?= $account['accountNr'] ?>">Isimti</a>]</td>
    <td><form action="?veiksmas=istrintiSaskaita&accountNr=<?= $account['accountNr'] ?>" method="post">
            <button class="mygtukas" type="submit">Istrinti saskaita</button>
            </form>
            </td>
  </tr>
  <?php endforeach ?>
</table>

</body>
</html>