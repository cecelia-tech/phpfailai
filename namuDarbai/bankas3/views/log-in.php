<?php require DIR.'views/top.php' ?>

<h1 class="centruoti">Log-in</h1>
    <form class="centruoti"action="<?= URL ?>login" method="post">
    <input type="text" name="vardas" placeholder="Vardas">
    <input type="password" name="slaptazodis" placeholder="Slaptazodis">
    <button class="mygtukas"type="submit">Log-in</button>
    </form>

<?php require DIR.'views/bottom.php' ?>



