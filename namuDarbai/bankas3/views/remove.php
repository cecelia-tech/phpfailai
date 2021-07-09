<?php require DIR.'views/top.php' ?>

<h1 class="centruoti">Lesu isemimas</h1>
    <h3 class="centruoti">
    <?php 
    $accountId = $id ?? 0;?>
    <?php foreach (Bank\Json::getJson()->showAll() as $account) {
        if ($account['id'] == $accountId) {
        echo $account['vardas'] . " " . $account['pavarde'] . " saskaita. Saskaitoje yra " .  $account['likutis'] . " pinigu.";
        }
    } ?>
    </h3>
    <form class="centruoti" action="<?= $id ?>" method="post">
    <input type="text" name="sumaIsimti" value="">
    <button class="mygtukas" type="submit">Vykdyti</button>
    </form>

<?php require DIR.'views/bottom.php' ?>
