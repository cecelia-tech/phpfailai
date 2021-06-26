<?php

class Stikline {
    private $turis;
    private $kiekis = 0;

    public function __construct(int $turis)
    {
        $this->turis = $turis;
    }
    public function ipilti(int $kiekis) 
    {
        if ($this->kiekis += $kiekis >= $this->turis) {
            return $this->kiekis = $this->turis;
        } else {
            return $this->kiekis += $kiekis;
        }
    }
    public function ispilti() 
    {
        $ispilamasKiekis = $this->kiekis;
        $this->kiekis = 0;
        return $ispilamasKiekis;
    }
}