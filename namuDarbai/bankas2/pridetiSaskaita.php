<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridėti naują dėžę</title>
</head>
<body>
<?php include __DIR__ . '/menu.php' ?>
<?php include __DIR__. '/funkcijos.php'; ?>
    <h1>Saskaitos pridejimas</h1>
    <form action="?veiksmas=pridetiSaskaita" method="post">
        <input type="text" name="vardas">
        <input type="text" name="pavarde">
        <input type="text" name="asmensKodas">
        <button type="submit">Pridėti naują saskaita</button>
    </form> 
    
</body>
</html>