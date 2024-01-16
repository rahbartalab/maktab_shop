<?php

use Product\Pants;
use Product\Shirt;
use Product\Shop;

require_once __DIR__ . '/vendor/autoload.php';

$shirt = new Shirt('shirtOne', 2500, [
    'color' => 'red',
    'brand' => 'adidas'
], 'xlg');

$pants = new Pants('pantsOne', 3000, [
    'color' => 'blue',
    'brand' => 'adidas'
], 60);

$shop = new Shop();

$shop->addProduct($shirt, 3)->addProduct($pants, 5);


dd($shop->getSuggestion(Shirt::class, 'xlg', 3000, [
    'color' => 'red',
    'brand' => 'adidas'
]));