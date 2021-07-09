<?php
namespace Bank;

class BankController {

    public function index()
    {
        return App::view('index', ['acounts' => Json::getJson()->showAll()]);
    }
    public function add($id)
    {
        return App::view('add', ['id' => $id]);
    }
    public function doAdd($id)
    {
        $id = (int) $id;
        $sumaPrideti = $_POST['sumaPrideti'];
        $saskaitos = Json::getJson()->showAll();

        foreach ($saskaitos as $account) {
        if ($account['id'] == $id) {
        if (is_string($sumaPrideti) && strlen($sumaPrideti) !== 0 ) {
            $sumaPrideti = str_replace(',', '.', $_POST['sumaPrideti'] );
            
        }
        if (strlen($sumaPrideti) === 0 ) {
            Funkcijos::setMessage('Iveskite norima suma.');
            Funkcijos::redirectToAction('pridetiLesas', $account['id']);
            
        } 
        elseif (!is_numeric($sumaPrideti)) {
            Funkcijos::setMessage('Laukelyje turi buti ivedama tik skaiciai');
            Funkcijos::redirectToAction('pridetiLesas', $account['id']);
            
        }
        else {
            $account = Json::getJson()->show($id);
            $account['likutis'] += round((float) abs($sumaPrideti), 2);
            Json::getJson()->update($id, $account);
            Funkcijos::setMessage(round(abs($sumaPrideti), 2). ' pinigai prideta i ' . $account['vardas'] .' ' .$account['pavarde'] . ' saskaita');
            App::redirect();
        }
    }
    }
    }

    public function remove($id)
    {
        return App::view('remove', ['id' => $id]);
    }

    public function doRemove($id)
    {
        $sumaIsimti = $_POST['sumaIsimti'];
        $id = (int) $id;
        if (is_string($sumaIsimti) && strlen($sumaIsimti) !== 0 ) {
            $sumaIsimti = str_replace(',', '.', $_POST['sumaIsimti'] );
        }
        if (strlen($sumaIsimti) === 0 ) {
            Funkcijos::setMessage('Iveskite norima suma.');
            Funkcijos::redirectToAction('isimtiLesas', $id);
        } 
        elseif (!is_numeric($sumaIsimti)) {
            Funkcijos::setMessage('Laukelyje turi buti ivedama tik skaiciai');
            Funkcijos::redirectToAction('isimtiLesas', $id);
        } 
        foreach (Json::getJson()->showAll() as $account) {
            if ($account['likutis'] === $id) {
                if ($account['likutis'] < (float) abs($sumaIsimti)) {
            Funkcijos::setMessage('Saskaitoje tiek lesu nera. Galima nuskaiciuoti suma yra ' . $account['likutis'] . " pinigai.");
            //setOld('likutis', (float)$sumaIsimti);
            Funkcijos::redirectToAction('isimtiLesas', $id);
        }
            }
        }
        $account = Json::getJson()->show($id);
        $account ['likutis'] -= (int)$_POST['sumaIsimti'];
        Json::getJson()->update($id, $account);
        Funkcijos::setMessage(abs($sumaIsimti). ' pinigai sekmingai isimta is ' . $account['vardas'] . ' ' . $account['pavarde'] . ' saskaitos');
        App::redirect();
    }
    public function delete($id)
    {
    $accountId = $id ?? 0;
    $accounts = Json::getJson()->showAll();
    foreach ($accounts as $index => $account1) {
        if ($account1['id'] == $accountId) {
            if ($account1['likutis'] > 0 ) {
                Funkcijos::setMessage('Saskaitos, kurioje yra lesu, istrinti negalima');
                    App::redirect();
            } else {
                Json::getJson()->delete($id);
                Funkcijos::setMessage('Saskaita sekmingai istrinta');
                App::redirect();
            }
            }
        }
    }

    public function create()
    {
        return App::view('create-account');
    }
    public function save()
    {
        $account = ['vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'], 'accountNr' => $_POST['accountNr'], 'id' => $_POST['id'], 'likutis' => 0];

        if (strlen($account['vardas']) == 0 || strlen($account['pavarde']) == 0 || strlen($account['asmensKodas']) == 0) {
        Funkcijos::setMessage('Visi laukeliai turi buti uzpildyti.');
        //Funkcijos::setOld('likutis', (float)$sumaIsimti);
        Funkcijos::redirectToAction2('create-account', 'POST');
    }
elseif (strlen($account['vardas']) <= 3 || strlen($account['pavarde']) <= 3) {
        Funkcijos::setMessage('Vardas ir pavarde turi buti ilgesni nei 3 simboliai.');
        Funkcijos::redirectToAction2('create-account', 'POST');
    }

if (!(strlen($account['asmensKodas']) == 11)) {
        Funkcijos::setMessage('Asmens kodas turi buti is 11 skaiciu.');
        Funkcijos::redirectToAction2('create-account', 'POST');
    } elseif (!(preg_match("/^[0-9]+$/", $account['asmensKodas']))) {
        Funkcijos::setMessage('Kodas tik is skaiciu.');
        Funkcijos::redirectToAction2('create-account', 'POST');
    } elseif (!(substr($account['asmensKodas'], 0,1) > 0 && substr($account['asmensKodas'], 0,1) <7)) {
        Funkcijos::setMessage('Pirmas skaicius turi buti nuo 0 iki 6.');
        Funkcijos::redirectToAction2('create-account', 'POST');
    }
    //S = A*1 + B*2 + C*3 + D*4 + E*5 + F*6 + G*7 + H*8 + I*9 + J*1
    // foreach ($account['asmensKodas'] as $raide) {
    //     # code...
    // }
foreach ($accounts as $account2) {
    if ($account2['asmensKodas'] === $account['asmensKodas']) {
        Funkcijos::setMessage('Saskaita su tokiu asmens kodu jau yra sukurta');
        Funkcijos::redirectToAction2('create-account', 'POST');
    }
}
        Json::getJson()->create($account);
        Funkcijos::setMessage('Nauja saskaita sukurta');
        App::redirect();
    }
}