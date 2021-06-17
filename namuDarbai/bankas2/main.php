<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN</title>
</head>
<body>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
</style>
<?php include __DIR__ . '/funkcijos.php' ?>
<?php include __DIR__ . '/msg.php' ?>
<!-- NUORODA I NAUJA saskaita -->
    <div>
        <a href="?veiksmas=pridetiSaskaita">Prideti nauja saskaita</a>
    </div>

    <table class="tg" style="width:100%">
    <caption>Vartotoju saskaitos</caption>
    <?php
     usort($accounts, function($a, $b) {
        return $a['pavarde'] <=> $b['pavarde'];
    })?>
  <tr>
    <th class="tg-0pky">Vardas</th>
    <th class="tg-0pky">Pavarde</th>
    <th class="tg-0pky">Asmens kodas</th>
    <th class="tg-0pky">Saskaitos numeris</th>
    <th class="tg-0pky">Saskaitos likutis</th>
    <th class="tg-0pky">Inesti lesu</th>
    <th class="tg-0pky">Issiimti lesas</th>
    <th class="tg-0pky">Istrinti saskaita</th>
  </tr>
  <?php foreach ($accounts as $account) :?>
  <tr>
    <td><?=$account['vardas']?></td>
    <td><?=$account['pavarde']?></td>
    <td><?=$account['asmensKodas']?></td>
    <td><?=$account['accountNr']?></td>
    <td><?=$account['likutis']?></td>
    <td>[<a href="?veiksmas=pridetiLesas&accountNr=<?= $account['accountNr'] ?>">Pridėti</a>]</td>
    <td>[<a href="?veiksmas=isimtiLesas&accountNr=<?= $account['accountNr'] ?>">Isimti</a>]</td>
    <td></td>
  </tr>
  <?php endforeach ?>
</table>

</body>
</html>