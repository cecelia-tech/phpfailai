<?php

$colour = 'rosybrown';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header('Location: http://localhost/phpfailai/namuDarbai/mechanika/9-uzd.php?count=' . count($_POST['abc']) . '&sugeneruota=' . $kiekSugeneruota);
}
    
    if (isset($_GET['count'])) {
        $colour = 'white';
        echo 'Buvo pasirinkta ' . $_GET['count'];
        //$kiekSugeneruota;
    } elseif (isset($_GET['sugeneruota'])) {
        echo 'is viso buvo sugeneruota: ' . $_GET['sugeneruota'];
    } 
    else{
        $count = 'Ne vienas nebuvo pasirinktas.';
    }

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body style="background-color: <?=$colour?>">

<form action="" method="POST">
<?php

$kiekSugeneruota = 0;
    if (!(isset($_GET['count']))) {
    foreach (range(1, rand(3, 10)) as $key => $value) {
        echo "<label style='display: block;' for='abc'>" . chr(rand(65, 90)) . "</label>";
        echo " <input style='display: block;' type='checkbox' name='abc[]' id='abc'> ";
        $kiekSugeneruota++;
    }
    echo "<button type=\"submit\">Rodyti</button>";
}
?>


</form>
    
</body>
</html>

