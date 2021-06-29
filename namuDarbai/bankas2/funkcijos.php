<?php
session_start();

function getMessage() 
{
    if (!isset($_SESSION['msg'])) {
        return false;
    }
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);

    if (isset($_SESSION['old'])) {
        $old = $_SESSION['old'];
        unset($_SESSION['old']);
    }
    return [$msg, $old];
}

function setMessage(string $msg)
{
    $_SESSION['msg'] = $msg;
}

function setOld(string $name, string $value)
{
    $_SESSION['old'][$name] = $value;
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
function redirectToAction($action, $accountNr = 0){
    if ($accountNr) {
        header('Location: http://localhost/phpfailai/namuDarbai/bankas2/?veiksmas='.$action.'&accountNr='.$accountNr);
        die;
    }
    else {
        header('Location: http://localhost/phpfailai/namuDarbai/bankas2/?veiksmas='.$action);
    }
    die;
}
function redirectToAction2($action, $method){
    if ($action && $method == 'POST') {
        header('Location: http://localhost/phpfailai/namuDarbai/bankas2/?veiksmas='.$action);
    }
    else {
        header('Location: http://localhost/phpfailai/namuDarbai/bankas2/?veiksmas='.$action);
    }
    die;
}