<div>
<a href="http://localhost/phpfailai/13/">Homepage</a>
<a href="http://localhost/phpfailai/13/member.php">Member Page</a>
<?php if (!isset($_SESSION['logged'])) :?>
<a href="http://localhost/phpfailai/13/log-in.php">Log-in</a>
<?php else : ?>
    <a href="http://localhost/phpfailai/13/log-in.php?logout">Log-out</a>
</div>
<?php endif ?>