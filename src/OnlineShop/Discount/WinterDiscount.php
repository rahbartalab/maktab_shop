<?php

namespace OnlineShop\Discount;

use OnlineShop\Clothing;
use OnlineShop\Jacket;

class WinterDiscount implements DiscountStrategy
{
    public function getPercent(Clothing $clothing): int
    {
        $percent = 0;
        if ($clothing::class == Jacket::class)
            $percent += 10;

        if ($clothing->getSeason() == 'fall') return $percent + 40;
        if ($clothing->getSeason() == 'winter') return $percent + 50;
        if ($clothing->getSeason() == 'summer') return $percent + 20;

        return $percent;

    }
}