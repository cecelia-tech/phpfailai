<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Pridėti naują dėžę</title>
</head>
<body class="fonas" >
<?php include __DIR__ . '/menu.php' ?>
<?php include __DIR__. '/funkcijos.php'; ?>
<?php include __DIR__. '/msg.php'; ?>
    <h1 class="centruoti ">Saskaitos pridejimas</h1>
    <div class="centruoti ">
    <form action="?veiksmas=pridetiSaskaita" method="post">
        <input type="text" name="vardas" placeholder="Vardas" >
        <input type="text" name="pavarde" placeholder="Pavarde" >
        <input type="text" name="asmensKodas" placeholder="Asmens kodas" >
        <input type="text" name="accountNr" value="<?='LT01'. generateAccountNr()?>" readonly>
        <button class="mygtukas "type="submit">Pridėti naują saskaita</button>
    </form> 
    </div>
</body>
</html>