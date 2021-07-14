<?php
namespace Bank;
//use Bank\App;

class LogInController {

    public function index()
    {
        return App::view('log-in', ['darbuotojai' => JsonDarbuotojai::getDarbuotojaiJson()->showAll()]);
    }

    public function showLogin()
    {
        return App::view('log-in');
    }

    public function doLogin()
    {
        $vardas = $_POST['vardas'];
        $slaptazodis = md5($_POST['slaptazodis']);

        $darbuotojas = Maria::getMaria()->getUser($vardas, $slaptazodis);

        if (empty($darbuotojas)) {
            App::redirect('login'); //+pranesimas, kad blogas kazkas
        }
        $_SESSION['logged'] = 1;
        $_SESSION['vardas'] = $vardas;
        App::redirect();
        
        
    }





//     public function login(){
    
//     // 1) rodyti forma
//     // 2 atjungia user
//     $uri2 = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
//     $uri2 = explode('/', $uri2);

//     if ($uri2[0] == 'logout') {
//         unset($_SESSION['logged'], $_SESSION['vardas']);
//         Funkcijos::setMessage('Sekmingai atsijungete');
//         header('Location:' . URL . 'login');
//         die;
//     }
//     if ($uri2[0] == 'login') {
//     // 2) tikrinti prisijungimo duomenis
//     $darbuotojai = JsonDarbuotojai::getDarbuotojaiJson()->showAll();
//     foreach ($darbuotojai as $darbuotojas) {
//         if ($darbuotojas['vardas'] == $_POST['vardas']) {
//             if ($darbuotojas['slaptazodis'] == md5($_POST['slaptazodis'])) {
//                 $_SESSION['logged'] = 1;
//                 $_SESSION['vardas'] = $darbuotojas['vardas'];
//                 Funkcijos::setMessage('Sekmingai prisijungete, ' .$darbuotojas['vardas']);
//                 header('Location:' . URL);
//                 die;
//             }
//         }
//     }
//     Funkcijos::setMessage('Toks vartotojas nerastas');
//     header('Location:' . URL . 'login');
//         die;
// }
// }
}