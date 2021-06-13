<?php
//spalva  dc143c
_d($_GET);

if (isset($_GET['colour'])) {
    $spalva = $_GET['colour'];
       $insert = "<body style=background-color:#" . $spalva . ">";
} else {
    $insert ='<body style="background-color:black">';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namu darbai</title>
    <link rel="stylesheet" href="../../css/main.css">
</head>
<?=$insert?>
    <a class="linkai" href="http://localhost/phpfailai/namuDarbai/mechanika/2-uzd.php">Homepage</a>
    
</body>
</html>

