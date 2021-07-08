<?php

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


    }

    public function save()
    {

    }
}