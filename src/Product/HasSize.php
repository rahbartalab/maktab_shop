<?php

namespace Product;

interface HasSize
{
    public function sizeIsValid(mixed $size): bool;
}