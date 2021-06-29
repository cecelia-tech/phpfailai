<?php

class Tenisininkas {

    private $vardas;
    private $kamuoliukas;
    private static $zaidejas1;
    private static $zaidejas2;

    public function __construct($vardas)
    {
        $this->vardas = $vardas;
        $this->kamuoliukas = false;
    }
    // public static function getZaideja($name)
    // {
    //     if (!(isset(self::$zaidejas1))) {
    //         return self::$zaidejas1 = new self($name);
    //     } elseif (!(isset(self::$zaidejas2))) {
    //         return self::$zaidejas2 = new self($name);
    //     } else {
    //         echo 'Tik 2 zaidejai';
    //     }
    // }
    public function arTuriKamuoliuka(){
        return $this->kamuoliukas;
    }

    public function __get($prop){
        if ($prop == 'vardas') {
            return $this->vardas;
        }
    }
    public function perduotiKamuoliuka()
    {
        if (!$this->kamuoliukas) {
            echo '<h1>Perduoti negalim, nes neturim kamuoliuko</h3>';
        }
        if (self::$zaidejas1 === null || self::$zaidejas2 === null) {
            echo '<h1>Kazkurio zaidejo nera</h3>';
            die;
        }
        $this->kamuoliukas = false;
        // this is 1
        if ($this->vardas === self::$zaidejas1->vardas) {
            # code...
        }
        //this is 2
        if ($this->vardas === self::$zaidejas1->vardas) {
            # code...
        }
    }
    public function zaidimoPradzia()
    {

    }
    public function getZaidejas()
    {
        return self::$zaidejas1;
    }
    public function __set($prop, $value)
    {
        // echo 'atejo';
        // die;
        if ($prop == 'zaidejas1') {
            $this->zaidejas1 = $value;
        } elseif ($prop == 'zaidejas2') {
            $this->zaidejas2 = $value;
        }
        
            //return self::$zaidejas1 = $value;

    }
    // public static function __get($prop)
    // {
    //     return self::$zaidejas1;
    // }
    // public function ReflectionClass::setStaticPropertyValue()
    // {
    //     echo 'atejo';
    //     die;
    //     if (true) {
    //         self::$zaidejas1 = $value;
    //     }
    // }
}