<?php

include __DIR__. '/MarsoPalydovas.php';

$palydovas = MarsoPalydovas::getMarsoPalydovas('Deimas');
echo "<pre>";
var_dump($palydovas);
$palydovas2 = MarsoPalydovas::getMarsoPalydovas('Fobas');
echo "<pre>";
var_dump($palydovas2);
$palydovas3 = MarsoPalydovas::getMarsoPalydovas('ddd');
echo "<pre>";
var_dump($palydovas3);
$palydovas4 = MarsoPalydovas::getMarsoPalydovas('eeee');
echo "<pre>";
var_dump($palydovas4);
$palydovas6 = MarsoPalydovas::getMarsoPalydovas('wwww');
echo "<pre>";
var_dump($palydovas6);
$palydovas7 = MarsoPalydovas::getMarsoPalydovas('jjjj');
echo "<pre>";
var_dump($palydovas7);