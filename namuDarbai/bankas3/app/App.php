<?php
namespace Bank;
//use Darbuotojai\LogInController;

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

    public static function checkLogin() 
    {
        if (!isset($_SESSION['logged'])) {
            self::redirect('login');
    }
    }
    private static function router()
    {
        $uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri);
// print_r($uri);
//        die;
        if ('create-account' == $uri[0]) {
            self::checkLogin();
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->create();
            }
            elseif ('POST' == $_SERVER['REQUEST_METHOD']){
                return (new BankController)->save();
            }
        }

        if ('pridetiLesas' == $uri[0] && isset($uri[1])) {
            self::checkLogin();
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->add($uri[1]);
            }
            else {
                return (new BankController)->doAdd($uri[1]);
            }
        }
        if ('isimtiLesas' == $uri[0] && isset($uri[1])) {
            self::checkLogin();
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->remove($uri[1]);
            }
            else {
                return (new BankController)->doRemove($uri[1]);
            }
        }
        if ('istrintiSaskaita' == $uri[0] && isset($uri[1]) && 'POST' == $_SERVER['REQUEST_METHOD']) {
            self::checkLogin();

                return (new BankController)->delete($uri[1]);
        }

        if ($uri[0] === '' && count($uri) === 1) {
            return (new BankController)->index();
        }
        if ($uri[0] === 'login' ) {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                return (new LogInController)->showLogin();
            } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                return (new LogInController)->doLogin();
            }
        }

        if ($uri[0] === 'logout' ) {
            unset($_SESSION['logged'], $_SESSION['vardas']);
            self::redirect('login');
        }
        // if ($uri[0] === 'logout' && $_SERVER['REQUEST_METHOD'] === 'GET') {
        //     return (new LogInController)->login();
        //     //return (new LogInController)->index();
        // }
        // if ($uri[0] === 'prideti' ) {
        //     if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        //         return (new BankController)->prideti();
        //     } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //         return (new BankController)->issaugotiDarbuotoja();
        //     }
        // }
       
        self::view('404');
        http_response_code(404);
        
    }
}
