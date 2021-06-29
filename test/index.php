

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/phpfailai/test/" method="get">
    <input style="display:block;" type="text" name="pirmas" id="">
    <input style="display:block;" type="text" name="antras" id="">
    <input style="display:block;" type="text" name="trecias" id="">
    <button type="submit">GO</button>
    <a href="http://localhost/phpfailai/test/">RESET</a>
    </form>
</body>
</html>


<?php
//reset gali but linkas
//int
//ne skaicius nereguoja, bet nesuluzta, tiesiog praleidzia
//tuscia arba raides -> tuscias masyvas
$array = [];
echo 'PRADZIA';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
    //$array = [1=>$_GET['pirmas'], 2=>$_GET['antras'], 3=>$_GET['trecias']];
    // if (!(is_numeric($_GET['pirmas'])) && !(is_numeric($_GET['antras'])) && !(is_numeric($_GET['trecias']))) {
    //     return null;
    // } 
    if (is_numeric($_GET['pirmas'])) {
        $array[] = $_GET['pirmas'];
    }
    if (is_numeric($_GET['antras'])) {
        $array[] = $_GET['antras'];
    }
    if (is_numeric($_GET['trecias'])) {
        $array[] = $_GET['trecias'];
    }
    // foreach ($array as $key => &$value) {
    //     if (is_numeric($value)) {
    //         continue;
    //     } else {
    //         unset($value);
    //     }
    // }
    echo "<pre>";
    rsort($array);
    print_r($array);
}
//arsort($array);
    
    
?>