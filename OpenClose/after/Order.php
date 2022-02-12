<?php

namespace SolidPrinciples\OpenClose\after;

class Order
{
    private Shipping $shipping;
    private array $lineItems;

    public function __construct(Shipping $shipping, array $lineItems)
    {
        $this->shipping = $shipping;
        $this->lineItems = $lineItems;
    }

    public function getShippingCost()
    {
        return $this->shipping->getCost($this);
    }

    public function getTotal(): int
    {
        return count($this->lineItems);
    }

    public function getTotalWeight()
    {
        return array_sum(array_column($this->lineItems, 'weight'));
    }
}

