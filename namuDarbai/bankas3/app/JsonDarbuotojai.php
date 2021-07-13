<?php
namespace Bank;

class JsonDarbuotojai {

    private $data;
    private static $obj;

    public static function getDarbuotojaiJson() 
    {
        return self::$obj ?? self::$obj = new self;
    }

    private function __construct ()
    {
    if (!(file_exists(DIR.'/darbuotojai.json'))) {
    file_put_contents(DIR.'/darbuotojai.json', json_encode([]));
    }
    //Darbuotojai::getDarbuotojai();
    $this->data = json_decode(file_get_contents(DIR.'/darbuotojai.json'), 1);
    
    }

    public function __destruct ()
    {
    file_put_contents(DIR.'/darbuotojai.json', json_encode($this->data));
    }

    public function create(array $darbuotojaiData) : void 
    {
        $this->data [] = $darbuotojaiData;
    }

    public function showAll() : array 
    {
        return $this->data;
    }

    
}