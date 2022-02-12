<?php

namespace SolidPrinciples\OpenClose\after;

class Air implements Shipping
{
    public function getCost(Order $order)
    {
        return max(20, $order->getTotalWeight() * 3);
    }
}