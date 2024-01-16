<?php

namespace OnlineShop\Discount;

use OnlineShop\Clothing;

class SummerDiscount implements DiscountStrategy
{
    public function getPercent(Clothing $clothing): int
    {
        if ($clothing->getSeason() == 'spring') return 40;
        if ($clothing->getSeason() == 'summer') return 50;
        if ($clothing->getSeason() == 'winter') return 30;
        return 0;
    }
}