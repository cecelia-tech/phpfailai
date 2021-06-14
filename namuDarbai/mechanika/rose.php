<?php

if (!(isset($_GET['id']))) {
        header('Location: http://localhost/phpfailai/namuDarbai/mechanika/pink.php');
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
    <title>Rose</title>
</head>
<body class="rose">
    <form action="http://localhost/phpfailai/namuDarbai/mechanika/rose.php" method="get">
    <button type="submit">Go To Pink</button>
    </form>
</body>
</html>

