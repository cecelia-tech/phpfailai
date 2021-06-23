<?php


class Kibiras1{
    protected $akmenuKiekis = 0;
    protected static $visasAkmenuKiekis = 0;

    public function prideti1Akmeni(){
        $this->akmenuKiekis++;
        self::$visasAkmenuKiekis++;
    }

    public function pridetiDaugAkmenu(int $kiekis){

        if (is_integer($kiekis) && $kiekis > 0) {
            $this->akmenuKiekis += $kiekis;
            self::$visasAkmenuKiekis += $kiekis;
        } else {
            echo '<h5>Argumentas turi buti tik teigiamas sveikasis skaicius</h5>';
        }
        
    }

    public function kiekPririnktaAkmenu(){
        return $this->akmenuKiekis;
    }    

    public static function kiekVisoPririnktaAkmenu()
    {
        return self::$visasAkmenuKiekis;
    }
}