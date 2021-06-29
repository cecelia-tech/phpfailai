<?php
include __DIR__. '/Grybas.php';
include __DIR__. '/Krepsys.php';
//KODEL NEVEIKIA FUNKCIJA?
$krepsys = new Krepsys;
// function grybauti($krepsys->pririnktasKiekis){
    do {
        $grybas = new Grybas;
        if ($grybas->valgomas && !($grybas->sukirmijes)) {
            $krepsys->pririnktasKiekis += $grybas->svoris;
        }
    } while (Krepsys::DYDIS > $krepsys->pririnktasKiekis);
//    return $krepsys->pririnktasKiekis;
//}

//echo grybauti();
echo $krepsys->pririnktasKiekis;