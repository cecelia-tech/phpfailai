<?php
_d($_GET);
_d($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo '<body style="background-color:green">';
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo '<body style="background-color:yellow">';
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <title>Du Mygtukai</title>
</head>
<body style="background-color: white">
    <div>
<form class="forma" action="http://localhost/phpfailai/namuDarbai/mechanika/6-uzd.php" method="get">
<!-- <label for="">GET</label> -->
<button class="labels" type="submit">GET</button>
</form>


<form class="forma" action="http://localhost/phpfailai/namuDarbai/mechanika/6-uzd.php" method="post">
<!-- <label for="">GET</label> -->
<button class="labels" type="submit">POST</button>
</form>
</div>
</body>
</html>
