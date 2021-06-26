<?php

include __DIR__. '/MarsoPalydovas.php';

$palydovas = MarsoPalydovas::getMarsoPalydovas('Deimas');
echo "<pre>";
var_dump($palydovas);
$palydovas = MarsoPalydovas::getMarsoPalydovas('Fobas');
echo "<pre>";
var_dump($palydovas);
$palydovas = MarsoPalydovas::getMarsoPalydovas('ddd');
echo "<pre>";
var_dump($palydovas);
$palydovas = MarsoPalydovas::getMarsoPalydovas('eeee');
echo "<pre>";
var_dump($palydovas);
$palydovas = MarsoPalydovas::getMarsoPalydovas('wwww');
echo "<pre>";
var_dump($palydovas);
$palydovas = MarsoPalydovas::getMarsoPalydovas('jjjj');
echo "<pre>";
var_dump($palydovas);