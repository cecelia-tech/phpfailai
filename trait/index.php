<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require __DIR__. '/Dangus.php';
require __DIR__. '/Garvezys.php';

$g = new Garvezys;

$g->sound();
$g->colour();