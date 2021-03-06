<?php
namespace Bank;
use App\DB\DataBase;

class Json implements DataBase {

    private $data;
    private static $obj;

    public static function getJson() 
    {
        return self::$obj ?? self::$obj = new self;
    }
    private function __construct ()
    {
    if (!(file_exists(DIR.'/accounts.json'))) {
    file_put_contents(DIR.'/accounts.json', json_encode([]));
    }
    $this->data = json_decode(file_get_contents(DIR.'/accounts.json'), 1);
    }

    public function __destruct ()
    {
    file_put_contents(DIR.'/accounts.json', json_encode($this->data));
    }

    //ACOUNTDATA VISAS SASKAITOS OBJEKTAS
    public function create(array $accountData) : void 
    {
        $this->data [] = $accountData;
    }

    public function update(int $accountId, array $accountData) : void 
    {
        foreach ($this->data as $index => $account) {
            if ($account['id'] == $accountId) {
                $this->data[$index] = $accountData;
                return;
            }
        }
    }

    public function delete(int $accountId) : void 
    {
        foreach ($this->data as $index => $account) {
            if ($account['id'] == $accountId) {
                unset($this->data[$index]);
                return;
            }
        }
    }

    public function show(int $accountId) : array 
    {
        foreach ($this->data as $index => $account) {
            if ($account['id'] == $accountId) {
                return $this->data[$index];
            }
        }
    }

    public function showAll() : array 
    {
        return $this->data;
    }

}