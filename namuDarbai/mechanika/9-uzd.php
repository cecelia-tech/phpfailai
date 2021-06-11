<?php

$colour = 'rosybrown';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $colour = 'white';
    $display = 'none';
    $display2 = 'inline-block';
    if (isset($_POST['abc'])) {
        $count = 'Buvo pasirinkta ' . count($_POST['abc']);
        $kiekSugeneruota;
        //echo $kiekSugeneruota;
    } else{
        $count = 'Ne vienas nebuvo pasirinktas.';
        // $kiekSugeneruota = 0;
    }
    
} else {
    $display = 'block';
    $display2 = 'none';
}

    $sugeneruota = 0;
    foreach (range(1, rand(3, 10)) as $key => $value) {
        $label = "<label style='display: block;' for='abc'>" . chr(rand(65, 90)) . "</label>";
        $input = " <input style='display: block;' type='checkbox' name='abc[]' id='abc'> ";
        $total .= $label . $input;
        $sugeneruota++;
    }
    $kiekSugeneruota = "Is viso buvo sugeneruota: " . $sugeneruota;
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
<h1><?=$count?> </h1>
<h1 style="display:<?=$display2?> "><?=$kiekSugeneruota?></h1>
<form style="display: <?=$display?>;" action="" method="POST">
<?=$total?>
<button type="submit">Pakeisti spalva</button>

</form>
    
</body>
</html>
