<?php

class Grybas {
    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function __construct()
    {
        $this->valgomas = (bool)rand(0, 1);
        $this->sukirmijes = (bool)rand(0, 1);
        $this->svoris = rand(5, 45);
    }
    
    public function __get($value)
    {
        if ($value === 'svoris') {
            return $this->svoris;
        }
        if ($value === 'sukirmijes') {
            return $this->sukirmijes;
        }
        if ($value === 'valgomas') {
            return $this->valgomas;
        }
    }
}