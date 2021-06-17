<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saskaitu sarasas</title>
</head>
<body>
<?php
include __DIR__. '/menu.php';
?>
<div class="container">
<?php _d($_GET) ?>
<a href="?sukurti=create">Sukurti saskaita</a>

    <!-- <form action="?action=create" method="get">
        <button type="submit">Sukurti saskaita</button>
    </form> -->
        <form action="http://localhost/phpfailai/namuDarbai/bankas/log-in.php?action=login" method="post">
        <button type="submit">Prisijungti</button>
    </form>
</div>    
</body>
</html>