<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

define('ENTER', true);
  
require __DIR__ .'../../bootstrap.php';

Bank\App::start();