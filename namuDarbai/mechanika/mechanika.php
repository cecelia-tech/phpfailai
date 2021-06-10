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
    <div>
        HALLO
    </div>
    <a class="linkai" href="http://localhost/phpfailai/namuDarbai/mechanika/mechanika.php">Homepage</a>
    <a class="linkai" href="?colour=1">Homepage su GET</a>

</body>
</html>

<?php

_d($_GET);
if (isset($_GET['colour'])) {
    if ($_GET['colour'] == 1) {
       echo '<div style="background-color:crimson"></div>';
    }
} else {
    echo '<div style="background-color:black"></div>';
}
?>