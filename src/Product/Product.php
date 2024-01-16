<?php

namespace Product;

class Product
{

    public function __construct(
        protected string $name,
        protected int    $price,
        protected array  $options
    )
    {
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

}