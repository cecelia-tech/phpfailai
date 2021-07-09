<?php
namespace Bank;

class App {

    public static function start()
    {
        ob_start();
        self::router();
        ob_end_flush();
    }

    public static function view($file, $data = [])
    {
        extract($data);
        require DIR.'views/'.$file.'.php';
    }

    public static function redirect($path = '') 
    {
    header('Location:' . URL . $path);
    die;
    }

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
    private static function router()
    {
        $uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri);
// print_r($uri);
//        die;
        if ('create-account' == $uri[0]) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->create();
            }
            elseif ('POST' == $_SERVER['REQUEST_METHOD']){
                return (new BankController)->save();
            }
        }

        if ('pridetiLesas' == $uri[0] && isset($uri[1])) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->add($uri[1]);
            }
            else {
                return (new BankController)->doAdd($uri[1]);
            }
        }
        if ('isimtiLesas' == $uri[0] && isset($uri[1])) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->remove($uri[1]);
            }
            else {
                return (new BankController)->doRemove($uri[1]);
            }
        }
        if ('istrintiSaskaita' == $uri[0] && isset($uri[1]) && 'POST' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->delete($uri[1]);
        }

        if ($uri[0] === '' && count($uri) === 1) {
            return (new BankController)->index();
        }
       
        self::view('404');
        http_response_code(404);
        
    }
}
