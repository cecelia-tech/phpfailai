<?php
defined('ENTER') || die;
require __DIR__.'/vendor/autoload.php';
//pagrindiniai settingai, bendri kintamieji visam kodui
session_start();

define('DIR', __DIR__.'/'); //pats auksciausias DIR, nereikks ..// and so on
define('URL', 'http://localhost/phpfailai/namuDarbai/bankas4/public/');
define('INSTALL_DIR', '/phpfailai/namuDarbai/bankas4/public/'); 