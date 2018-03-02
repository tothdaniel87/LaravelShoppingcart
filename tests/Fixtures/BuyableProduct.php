<?php

namespace Onweb\Tests\Shoppingcart\Fixtures;

use Onweb\Shoppingcart\Contracts\Buyable;

class BuyableProduct implements Buyable
{
    /**
     * @var int|string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @var int
     */
    private $tax;

    /**
     * BuyableProduct constructor.
     *
     * @param int|string $id
     * @param string $name
     * @param float $price
     * @param int $tax
     */
    public function __construct($id = 1, $name = 'Item name', $price = 10.00, $tax = 25)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
    }

    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null)
    {
        return $this->name;
    }

    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        return $this->price;
    }

    /**
     * Get the tax rate of the Buyable item.
     *
     * @return int
     */
    public function getTaxRate($options = null)
    {
        return $this->tax;
    }
}