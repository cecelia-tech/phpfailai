<?php
session_start();

function getMessage() 
{
    if (!isset($_SESSION['msg'])) {
        return false;
    }
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    return $msg;
}

function setMessage(string $msg)
{
    $_SESSION['msg'] = $msg;
}
function generateAccountNr()
{    
    foreach (range(1, 16) as $key => $value) {
        $nr .= rand(0, 9);
    }
    return $nr;
}

function redirect() 
{
    header('Location: http://localhost/phpfailai/namuDarbai/bankas2/');
    die;
}