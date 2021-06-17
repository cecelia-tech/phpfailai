<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesu inesimas</title>
</head>
<body>
    <h1>atejom cia</h1>
    <form action="?veiksmas=pridetiLesas&accountNr=<?= $_GET['accountNr'] ?>" method="post">
    <input type="text" name="sumaPrideti">
    <button type="submit">Vykdyti</button>
    </form>
</body>
</html>