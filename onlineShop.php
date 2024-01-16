<?php
require_once __DIR__ . '/vendor/autoload.php';

use OnlineShop\Discount\SummerDiscount;
use OnlineShop\Discount\WinterDiscount;
use OnlineShop\Jacket;
use OnlineShop\Pants;
use OnlineShop\Shirt;
use OnlineShop\Socks;

$jacket = new Jacket('jacketOne', 'winter', 3000);
$shirt = new Shirt('shirtOne', 'fall', 5000);
$pants = new Pants('pantsOne', 'winter', 5000);
$socks = new Socks('socksOne', 'spring', 6000);


dd($jacket->getPrice(new WinterDiscount()),
//    $shirt->getPrice(), $pants->getPrice(), $socks->getPrice()
);