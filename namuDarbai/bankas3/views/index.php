<?php require DIR.'views/top.php' ?>

<?php if (!isset($_SESSION['logged'])) {
    header('Location:' . URL . 'login');
    die;
    }
    ?>
    
<a class="nuorodos" href="<?=URL?>create-account">Prideti saskaita</a>
<table class="centruoti" style="width:100%">
    <caption class="pavadinimas" >Vartotoju saskaitos</caption>
    <?php
      $accounts = Bank\Maria::getMaria()->showAll();
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
  <?php foreach ($accounts as $account) :?>
  <tr class="lenteles-vidus">
    <td><?=$account['vardas']?></td>
    <td><?=$account['pavarde']?></td>
    <td><?=$account['asmensKodas']?></td>
    <td><?=$account['accountNr']?></td>
    <td><?=$account['likutis']?></td>
    <td>[<a href="pridetiLesas/<?= $account['id'] ?>">Pridėti</a>]</td>
    <td>[<a href="isimtiLesas/<?= $account['id'] ?>">Isimti</a>]</td>
    <td><form action="istrintiSaskaita/<?= $account['id'] ?>" method="post">
            <button class="mygtukas" type="submit">Istrinti saskaita</button>
            </form>
            </td>
  </tr>
  <?php endforeach ?>
</table>

<?php require DIR.'views/bottom.php' ?>
