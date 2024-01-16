<?php

namespace OnlineShop\Discount;

use OnlineShop\Clothing;

interface DiscountStrategy
{
    public function getPercent(Clothing $clothing) : int;
}