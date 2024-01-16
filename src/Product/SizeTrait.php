<?php

namespace Product;

trait SizeTrait
{
    public function setSize($size): bool|static
    {
        if ($this->sizeIsValid($size)) {
            $this->size = $size;
            return $this;
        }
        return false;
    }

    public function getSize(): string|int
    {
        return $this->size;
    }
}