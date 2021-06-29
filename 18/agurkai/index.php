<?php
define('ENTER', true);
require __DIR__. '/bootstrap.php';
//controller
require DIR. 'app/AgurkaiController.php';

_d($_SERVER['REQUEST_URI']);
$uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
$uri = explode('/', $uri); //vertimas i masyva

_d($uri);

//ROUTER
if ($uri[0] == 'testas' && isset($uri[1])) {
    (new AgurkaiController)->agurkuTest($uri[1]);
} elseif ($uri === '' && count($uri) === 1) {
    echo 'Index of Agurkai Controller';
}
else {
    http_response_code(404);
    echo '<h1>404 PAGE NOT FOUND</h1>';
}