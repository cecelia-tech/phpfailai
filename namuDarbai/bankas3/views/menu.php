<nav >
<a class="nuorodos" href="<?=URL?>">Home page</a>
<?php if (!isset($_SESSION['logged'])) :?>
<a class="nuorodos" href="<?=URL?>login">Log-in</a>
<?php else : ?>
<a class="nuorodos" href="<?=URL?>logout">Log-out</a>
</nav>
<?php endif ?>


