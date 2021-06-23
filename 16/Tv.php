<?php

class Tv {
    
    protected $istrizaine;
    private static $kanalai = [1 => 'TV3', 2 => 'LNK', 3 => 'LRT'];

    public function __construct($istrizaine)
    {
        $this->istrizaine = $istrizaine;
    }
    public function rodyti($kanalas)
    {
        echo '<h3>Rodom: ' . self::$kanalai[$kanalas] . '</h3>';
    }

    public static function keistiPrograma($kanalas, $pavadinimas)
    {
        if(isset(self::$kanalai[$kanalas]))
        self::$kanalai[$kanalas] = $pavadinimas;
    }
    public static function pridetiPrograma($kanalas, $pavadinimas)
    {
        if(!isset(self::$kanalai[$kanalas])){
            if (is_integer($kanalas)) {
                if ($kanalas > 0 && $kanalas <= 500){
                self::$kanalai[$kanalas] = $pavadinimas;
                }
            }
        }
    }
}