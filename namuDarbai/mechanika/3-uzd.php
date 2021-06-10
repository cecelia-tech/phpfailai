<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namu darbai</title>
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body>
    <a class="linkai" href="http://localhost/phpfailai/namuDarbai/mechanika/3-uzd.php">Homepage</a>

    <form action="" method="get">
        <label class="label" for="spalva">Iveskite spalvos koda</label>
        <input type="text" name="spalva" id="spalva">
        <button type="submit">Issiusti</button>
    </form>
    
</body>
</html>

<?php
//spalva  dc143c
_d($_GET);
if (isset($_GET['spalva'])) {
    $spalva = $_GET['spalva'];
    
       echo "<body style=background-color:#" . $spalva . "></body>";
    
} else {
    echo '<body style="background-color:black"></body>';
}
?>