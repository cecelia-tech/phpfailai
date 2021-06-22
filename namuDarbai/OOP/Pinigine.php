<?php

class Pinigine{

    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;
    private $suma;


    public function ideti ($kiekis){
        if (is_numeric($kiekis) && $kiekis > 0) {
            if ($kiekis < 2) {
            $this->metaliniaiPinigai += $kiekis;
        }
        if ($kiekis >= 2) {
            $this->popieriniaiPinigai += $kiekis;
        }
        } else {
            echo 'Argumentas gali buti tik teigiamas skaicius';
        }
        
    }
    public function skaiciuoti(){
        return $this->popieriniaiPinigai + $this->metaliniaiPinigai;
        
    }
}