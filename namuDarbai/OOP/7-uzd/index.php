<?php
include __DIR__. '/Grybas.php';
include __DIR__. '/Krepsys.php';

$krepsys = new Krepsys;
$pririnktasKiekis = 0;
//$grybai = [];
function grybauti()
{// {echo 'pasileidzia';
//     die;
    $i = 0;
    do {
        
        $grybai = ($grybas = new Grybas);
        if ($grybai[$i]->valgomas && $grybai[$i]->sukirmijes == false) {
            $krepsys->pririnktasKiekis += $grybai[$i]->svoris;
        }
        $i++;
    } while (Krepsys::DYDIS >= $krepsys->pririnktasKiekis);
    return $krepsys->pririnktasKiekis;
}
//$grybas = new Grybas;
grybauti();
//$krepsys->detiIKrepsi();
echo "<pre>";
//var_dump($grybas);
var_dump($krepsys);
$grybas->d();
//echo $krepsys->pririnktasKiekis += $grybas->svoris;

   // _d(Krepsys::DYDIS  >= $krepsys->pririnktasKiekis);    