<?php

namespace SolidPrinciples\OpenClose\before;

class Order
{
    private $shipping;
    private array $lineItems;

    public function __construct($shipping, $lineItems)
    {
        $this->shipping = $shipping;
        $this->lineItems = $lineItems;
    }

    public function getShippingCost()
    {
        if ($this->shipping == "ground") {
            if ($this->getTotal() > 100)
                return 0;

            // $1.5 per kg, but $10 minimum
            return max(10, $this->getTotalWeight() * 1.5);
        }

        if ($this->shipping == "air") {
            // $3 per kg, but $20 minimum
            return max(20, $this->getTotalWeight() * 3);
        }
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