<?php

class AgurkaiController {

    public function agurkuTest ($say ='')
    {
        echo 'Labas, as agurkai contoller';
        echo "<br>";
        echo $say;
    }
    public function index ()
    {
        require DIR.'views/main.php';
    }
}