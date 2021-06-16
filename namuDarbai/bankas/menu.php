<div>
<a href="http://localhost/phpfailai/namuDarbai/bankas/">Homepage</a>
<a href="http://localhost/phpfailai/namuDarbai/bankas/account.php">Member Page</a>
<?php if (!isset($_SESSION['logged'])) :?>
<a href="http://localhost/phpfailai/namuDarbai/bankas/log-in.php">Log-in</a>
<?php else : ?>
    <a href="http://localhost/phpfailai/namuDarbai/bankas/log-out.php?logout">Log-out</a>
</div>
<?php endif ?>