<?php

require __DIR__. '/PlanasStogui.php';
require __DIR__. '/Planas.php';
require __DIR__. '/Stogas.php';
require __DIR__. '/Antras.php';
require __DIR__. '/Pirmas.php';

$namas = new Pirmas;

echo $namas->DoPirmas();
echo "<br>";
echo $namas->DoAntras();
echo "<br>";
echo $namas->DoStogas();
echo "<br>";