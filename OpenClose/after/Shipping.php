<?php

namespace SolidPrinciples\OpenClose\after;

interface Shipping
{
    public function getCost(Order $order);

}