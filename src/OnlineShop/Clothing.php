<?php

namespace OnlineShop;

use OnlineShop\Discount\DiscountStrategy;
use OnlineShop\Discount\SummerDiscount;

class Clothing
{
    public function __construct(
        protected string $name,
        protected string $season,
        protected int    $basePrice
    )
    {
    }

    public function getPrice(DiscountStrategy $discountStrategy): float|int
    {
        return $this->basePrice * ((100 - $discountStrategy->getPercent($this)) / 100);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSeason(): string
    {
        return $this->season;
    }


}