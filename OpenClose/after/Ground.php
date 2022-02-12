<?php

namespace SolidPrinciples\OpenClose\after;

class Ground implements Shipping
{
    public function getCost(Order $order)
    {
        if ($order->getTotal() > 100)
            return 0;

        // $1.5 per kg, but $10 minimum
        return max(10, $order->getTotalWeight() * 1.5);
    }
}