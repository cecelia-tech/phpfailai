<?php

class MarsoPalydovas {

    private $title;
    private static $object = [];

 public function __construct($title)
    {
        $this->title = $title;
    }
    public static function getMarsoPalydovas($name)
    {
        if (count(self::$object) <=2) {
            return self::$object = new MarsoPalydovas($name);
        } else {
            return self::$object[rand(0, 1)];
        }

        // $subclass = static::class;
        // return self::$object ?? self::$object = new self;
    }

   
}