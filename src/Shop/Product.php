<?php

namespace Shop;

class Product
{
    public static int $lastId = 1;

    private int $id;
    private int $price;
    private string $title;
    private int $availableQuantity;

    /**
     * @param int $price
     * @param string $title
     * @param int $availableQuantity
     */
    public function __construct(int $price, string $title, int $availableQuantity)
    {
        $this->id = self::$lastId;
        $this->price = $price;
        $this->title = $title;
        $this->availableQuantity = $availableQuantity;

        self::$lastId++;
    }

    public function addToCart(Cart $cart, int $count): CartItem
    {
        $cartItem = new CartItem($this, $count);
        $cart->addItem($cartItem);
        return $cartItem;
    }

    public function removeFromCart(Cart $cart): void
    {
        $cart->removeItem($this);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAvailableQuantity(): int
    {
        return $this->availableQuantity;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setAvailableQuantity(int $availableQuantity): void
    {
        $this->availableQuantity = $availableQuantity;
    }


    public function increaseQuantity(Cart $cart): bool
    {
        if ($this->availableQuantity > 0)
            return $cart->increaseItemQuantity($this);
        return false;
    }

}