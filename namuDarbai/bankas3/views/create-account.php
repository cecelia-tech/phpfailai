<?php
ini_set("display_errors", "1");
error_reporting(E_ALL); 
// use Bank\App;
?>

<?php require DIR.'views/top.php' ?>


<h1 class="centruoti ">Saskaitos pridejimas</h1>
    <div class="centruoti ">
    <form action="<?= URL ?>create-account" method="post">
        <input type="text" name="vardas" placeholder="Vardas" >
        <input type="text" name="pavarde" placeholder="Pavarde" >
        <input type="text" name="asmensKodas" placeholder="Asmens kodas" >
        <input type="text" name="accountNr" value="<?='LT0'. Bank\App::generateAccountNr()?>" readonly>
        <input type="hidden" name="id" value="<?=Bank\App::generateId()?>" readonly>
        <button class="mygtukas "type="submit">Pridėti naują saskaita</button>
    </form> 
    </div>

<?php require DIR.'views/bottom.php' ?>
