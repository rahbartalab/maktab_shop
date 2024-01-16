<?php

namespace Product;

class Pants extends Product implements HasSize
{
    use SizeTrait;

    protected const SIZE_RANGE = ['start' => 30, 'end' => 60];
    protected int $size;

    public function __construct(string $name, int $price, array $options, int $size)
    {
        $this->setSize($size);
        parent::__construct($name, $price, $options);
    }

    public function sizeIsValid($size): bool
    {
        return $size % 2 == 0 && $size >= self::SIZE_RANGE['start'] && $size <= self::SIZE_RANGE['end'];
    }

    // conditions ? 'hello' : 'bye'
}