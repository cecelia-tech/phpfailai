<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formos</title>
</head>
<body>
    

    <form action="" method="post">
        Jūsų vardas
<input type="text" name="vardas" value=""> <br>
        Jūsų el. pašto adresas:
<input type="text" name="elpastas" value=""> <input type="submit" value="Išsiųsti"> </form>
</body>
</html>

<?php

$vardas = $_POST['vardas'];
$elpastas = $_POST['elpastas'];

print_r($_POST);

echo "<p>Jūsų vardas: <b> ($vardas) </b></p> <p>Jūsų el. paštas <b> ($elpastas) </b></p>";
?>