<nav >
<a class="nuorodos" href="http://localhost/phpfailai/namuDarbai/bankas2/">Home page</a>
<?php if (!isset($_SESSION['logged'])) :?>
<a class="nuorodos" href="http://localhost/phpfailai/namuDarbai/bankas2/log-in.php">Log-in</a>
<?php else : ?>
<a class="nuorodos" href="http://localhost/phpfailai/namuDarbai/bankas2/log-in.php?logout">Log-out</a>
</nav>
<?php endif ?>