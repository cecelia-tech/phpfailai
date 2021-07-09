<?php require DIR.'views/top.php' ?>

<table class="centruoti" style="width:100%">
    <caption class="pavadinimas" >Vartotoju saskaitos</caption>
    <?php
    $accounts = Bank\Json::getJson()->showAll();
      usort($accounts, function($a, $b) {
      return $a['pavarde'] <=> $b['pavarde'];
    })
    ?>
  <tr class="lenteles-virsus">
    <th>Vardas</th>
    <th>Pavarde</th>
    <th>Asmens kodas</th>
    <th>Saskaitos numeris</th>
    <th>Saskaitos likutis</th>
    <th>Inesti lesas</th>
    <th>Isimti lesas</th>
    <th>Istrinti saskaita</th>
  </tr>
  <?php foreach (Bank\Json::getJson()->showAll() as $account) :?>
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

<?php require DIR.'views/bottom.php' ?>
