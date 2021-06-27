<?php

class MarsoPalydovas {
//KODEL NEVEIKIA STATIC ARRAY?
    private $title;
    //private static $object;
    private static $object1;
    private static $object2;

    private function __construct($title)
    {
        $this->title = $title;
    }

    public static function getMarsoPalydovas($title)
    {
        if (!(isset(self::$object1))) {
            return self::$object1 = new self($title);
        } elseif (!(isset(self::$object2))) {
            return self::$object2 = new self($title);
        } else {
            $object = [0 => self::$object1, 1 => self::$object2];
            return $object[rand(0,1)];
        }
    }
}