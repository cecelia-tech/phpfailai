<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukurti saskaita</title>
</head>
<body>
    <?php include __DIR__ . '/menu.php' ?>
   
    <form action="?action=create" method="post">
    <input placeholder="Vardas" type="text" name="name">
    <input placeholder="Pavarde" type="text" name="surename">
    <input placeholder="Asmens kodas" type="text" name="code">
    <button type="submit">Pateikti</button>
    </form>
    
</body>
</html>