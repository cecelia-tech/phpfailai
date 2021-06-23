<?php
// pavyzdys kaip naudojant static sukuriamas tik 1 tos klases objectas
class Cart {

    private static $object;

    public static function getCart()
    {
        return self::$object ?? self::$object = new self;
    }
    private function __construct(){}


}