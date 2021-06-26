<?php

class Pinigine{

    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;


    public function ideti (float $kiekis){
        if (is_numeric($kiekis) && $kiekis > 0) {
            if ($kiekis < 2) {
            $this->metaliniaiPinigai += round($kiekis, 2);
            }
            if ($kiekis >= 2) {
                $this->popieriniaiPinigai += round($kiekis, 2);
            }
        } else {
            echo "<h1 style=\"color: red;\">Argumentas gali buti tik teigiamas skaicius</h1>";
        }
    }
    public function skaiciuoti(){
        return $this->popieriniaiPinigai + $this->metaliniaiPinigai;
        
    }
    public function monetos()
    {
        return $this->metaliniaiPinigai;
    }
    public function banknotai()
    {
        return $this->popieriniaiPinigai;
    }
}