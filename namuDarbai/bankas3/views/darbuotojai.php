<?php require DIR.'views/top.php' ?>

<h1 class="centruoti">Prideti darbuptoja</h1>
    <form class="centruoti"action="<?= URL ?>prideti" method="post">
    <input type="text" name="vardas" placeholder="Vardas">
    <input type="password" name="slaptazodis" placeholder="Slaptazodis">
    <button class="mygtukas"type="submit">Prideti</button>
    </form>

<?php require DIR.'views/bottom.php' ?>
