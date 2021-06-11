<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: http://localhost/phpfailai/namuDarbai/mechanika/rose.php?id');
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <title>Pink</title>
</head>
<body class="pink">
    <form action="http://localhost/phpfailai/namuDarbai/mechanika/pink.php" method="POST">
    <button type="submit">Go To Rose</button>
    </form>
</body>
</html>