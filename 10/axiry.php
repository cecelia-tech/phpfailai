

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form style="display:block;" action="" method="get">
    <div style="display:block;">X:</div>
    <input type="text" name="x" id="">
    <div style="display:block;">Y:</div>
    <input type="text" name="y" id="">
    <button style="display:block; margin: 10px 10px 10px 0;" type="submit">Sumuoti</button>
    </form>
</body>
</html>

<?php

$x = $_GET['x'];
$y = $_GET['y'];
$suma = $x + $y;
echo "Atsiųstų skaičių $x ir $y suma lygi $suma.";

?>