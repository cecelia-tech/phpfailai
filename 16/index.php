<?php

require __DIR__. '/Tv.php';
require __DIR__. '/Cart.php';

$TV1 = new Tv(32);
$TV2 = new Tv(100);
$TV3 = new Tv(60);

Tv::keistiPrograma(1, 'LRT24');

$TV2->rodyti(1);
$TV1->rodyti(1);
$TV3->rodyti(1);

$cart = Cart::getCart();
$cart2 = Cart::getCart();

var_dump($cart);
var_dump($cart2);