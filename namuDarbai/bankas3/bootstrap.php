<?php
defined('ENTER') || die;
require __DIR__.'/vendor/autoload.php';
//pagrindiniai settingai, bendri kintamieji visam kodui
session_start();

define('DIR', __DIR__.'/'); //pats auksciausias DIR, nereikks ..// and so on
define('URL', 'http://localhost/phpfailai/namuDarbai/bamkas3/public/');
define('INSTALL_DIR', '/phpfailai/namuDarbai/bankas3/public/'); 