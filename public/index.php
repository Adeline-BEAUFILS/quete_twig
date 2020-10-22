<?php
require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);

$products = [
    'product1'=> ['name' => 'alloïde'],
    'product2'=> ['name' => 'bourdoïde'],
    'product3'=> ['name' => 'coassoïde'],
    'product4'=> ['name' => 'dingloïde'],
    'product5'=> ['name' => 'fumoïde'],
];
echo $twig->render('index.html.twig', ['products' => $products]);