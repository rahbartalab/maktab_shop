<?php

namespace Product;

final class Shop
{
    private array $repo = [];
    private int $income = 0;

    public static int $id = 1;

    public function addProduct(Product $product, int $count): Shop
    {
        $this->repo[] = [
            'id' => Shop::$id,
            'product' => $product,
            'count' => $count,
        ];
        Shop::$id++;
        return $this;
    }

    public function getSuggestion(string $type, int|string $size, int $maxPrice, array $options): array
    {
        $suggestions = [];

        foreach ($this->repo as $item) {
            if (
                get_class($item['product']) == $type
                &&
                $item['product']->getPrice() <= $maxPrice
                &&
                $item['product']->getSize() == $size
                &&
                $options == (array_intersect($item['product']->getOptions(), $options))
            ) {
                $suggestions[] = $item;
            }
        }

        return $suggestions;
    }
}

// $array -> ? ;;;;;; $array[] = 2 , $array[] = 3