<?php

class Krepsys {
    public const DYDIS = 500;
    public $pririnktasKiekis = 0;
    
    public function deti(Grybas $grybas)
    {
        if ($grybas->valgomas && !$grybas->sukirmijes) {
            $this->pririnktasKiekis += $grybas->svoris;
        }
        return self::DYDIS > $this->pririnktasKiekis;
    }
}