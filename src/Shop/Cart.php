<?php

namespace Shop;

class Cart
{
    private array $items;

    public function addItem(CartItem $cartItem)
    {
        $this->items[] = $cartItem;
    }

    public function removeItem(Product $product): void
    {
        foreach ($this->items as $key => $item) {
            if ($product == $item->getProduct()) {
                unset($this->items[$key]);
            }
        }
    }


    public function increaseItemQuantity(Product $product): bool
    {
        foreach ($this->items as $key => $item) {
            $cartItem = $this->items[$key];
            if ($product == $item->getProduct() && $product->getAvailableQuantity() >= $cartItem->getQuantity() + 1) {
                $cartItem->setQuantity($cartItem->getQuantity() + 1);
                return true;
            }
        }
        return false;
    }
}