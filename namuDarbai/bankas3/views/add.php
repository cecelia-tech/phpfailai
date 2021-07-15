<?php
ini_set("display_errors", "1");
error_reporting(E_ALL); 
// use Bank\App;
?>
<?php require DIR.'views/top.php' ?>
<h1 class="centruoti" >Prideti lesas</h1>
    <h3 class="centruoti">
    <?php 
    $accountId = $id ?? 0;
   
    foreach (Bank\Maria::getMaria()->showAll() as $account) {
        if ($account['id'] == $accountId) {
        echo $account['vardas'] . " " . $account['pavarde'] . " saskaita. Saskaitoje yra " .  $account['likutis'] . " pinigu.";
        }
    } ?>
    </h3>
    <form class="centruoti" action="<?= $id ?>" method="post">
    
    <input type="text" name="sumaPrideti" id="sumaPrideti">
    <button class="mygtukas" type="submit">Vykdyti</button>
    </form>

<?php require DIR.'views/bottom.php' ?>
