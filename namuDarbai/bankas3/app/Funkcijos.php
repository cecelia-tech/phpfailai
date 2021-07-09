<?php
namespace Bank;

class Funkcijos{

public static function getMessage() 
{
    if (!isset($_SESSION['msg'])) {
        return false;
    }
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);

    // if (isset($_SESSION['old'])) {
    //     $old = $_SESSION['old'];
    //     unset($_SESSION['old']);
    // }
    return [$msg];
    //, $old
}

public static function setMessage(string $msg)
{
    $_SESSION['msg'] = $msg;
}

// public static function setOld(string $name, string $value)
// {
//     $_SESSION['old'][$name] = $value;
// }
public static function generateAccountNr()
    {    $nr = 1;
    foreach (range(1, 16) as $key => $value) {
        $nr .= rand(0, 9);
    }
    return $nr;
    }

public static function generateId()
    { 
        return rand(1000000, 9999999);
    }


public static function redirectToAction($action, $id = 0){
    if ($id) {
        header('Location:' . URL.$action .'/'. $id.'/');
        die;
    }
    else {
        header('Location:' . URL.$action);
    }
    die;
}
public static function redirectToAction2($action, $method){
    if ($action && $method == 'POST') {
        header('Location:' . URL.$action);
    }
    die;
}
}