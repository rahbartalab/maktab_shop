<?php

namespace Product;

class Shirt extends Product implements HasSize
{
    use SizeTrait;

    protected const VALID_SIZES = ['sm', 'md', 'lg', 'xlg', '2xlg', '3xlg'];
    protected string $size;

    // override
    public function __construct(string $name, int $price, array $options, string $size)
    {
        $this->setSize($size);
        parent::__construct($name, $price, $options);
    }

    public function sizeIsValid($size): bool
    {
        return in_array($size, self::VALID_SIZES);
    }
}