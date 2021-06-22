<?php


class Kibiras1{
    protected $akmenuKiekis = 0;

    public function prideti1Akmeni(){
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis){

        if (is_integer($kiekis) && $kiekis > 0) {
            $this->akmenuKiekis += $kiekis;
        } else {
            echo '<h5>Argumentas turi buti tik teigiamas sveikasis skaicius</h5>';
        }
        
    }

    public function kiekPririnktaAkmenu(){
        return $this->akmenuKiekis;
    }    
}