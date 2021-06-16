<?php
require __DIR__. '/bootstrap.php';

if (!isset($_SESSION['logged'])) {
    header('Location: http://localhost/phpfailai/13/log-in.php');
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to member page</title>
</head>
<body>
    <?php include __DIR__.'/menu.php'?>
    <?php include __DIR__.'/msg.php'?>
    <h1>Welcome to member page</h1>
</body>
</html>