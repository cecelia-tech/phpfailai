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
        $account = Json::getJson()->show($id);
        $account ['likutis'] += (int)$_POST['sumaPrideti'];
        Json::getJson()->update($id, $account);
        App::redirect();
    }

    public function remove($id)
    {
        return App::view('remove', ['id' => $id]);
    }

    public function doRemove($id)
    {
        $id = (int) $id;
        $account = Json::getJson()->show($id);
        $account ['likutis'] -= (int)$_POST['sumaIsimti'];
        Json::getJson()->update($id, $account);
        App::redirect();
    }
    public function delete($id)
    {
        Json::getJson()->delete($id);
        App::redirect();

    }

    public function create()
    {
        return App::view('create-account');
    }
    public function save()
    {
        $account = ['vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'], 'accountNr' => $_POST['accountNr'], 'id' => $_POST['id'], 'likutis' => 0];
        Json::getJson()->create($account);
        App::redirect();
    }
}