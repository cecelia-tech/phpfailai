<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    _d($_POST, 'issiusti duomenys');
    header("Location: http://localhost/phpfailai/10/");
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miestai ir gamta</title>
</head>
<body>
<h1>Miestai ir gamta</h1>
<a href="http://localhost/phpfailai/10/">Homepage</a>
<a href="?rodyti=miestai&puslapis=1">Miestai 1</a>
<a href="?rodyti=miestai&puslapis=2">Miestai 2</a>
<a href="?rodyti=gamta&puslapis=1">Gamta 1</a>
<a href="?rodyti=gamta&puslapis=2">Gamta 2</a>

<?php


_d($_GET, 'MASYVAS GET');
_d($_POST, 'MASYVAS POST');
_d($_SERVER['REQUEST_METHOD'], 'METODAS');


if (isset($_GET['rodyti'])) {
    # code...

    if ($_GET['rodyti'] == 'miestai') {
        echo 'rodom miestus', 'Puslapis:  ' . ($_GET['puslapis'] ?? 1);
    } elseif ($_GET['rodyti'] == 'gamta') {
        echo 'rodom gamta', 'Puslapis:  ' . ($_GET['puslapis'] ?? 1);
    } else {
        echo 'tokio neturim';
    }
} else {
    echo 'sveiki atvyke';
}


?>

<form style="margin: 50px;" action="http://localhost/phpfailai/10/" method="get">
<h3 style="margin-left: 50px;">GET forma</h3>
Ka rodyti <input type="text" name="rodyti" id="">
Puslapis <input type="text" name="puslapis" id="">
<button type="submit">Ziureti</button>
</form>
    

    <form style="margin: 50px;" action="http://localhost/phpfailai/10/" method="post">
<h3 style="margin-left: 50px;">POST forma</h3>
Ka rodyti <input type="text" name="rodyti" id="">
Puslapis <input type="text" name="puslapis" id="">
<button type="submit">Ziureti</button>
</form>
</body>
</html>