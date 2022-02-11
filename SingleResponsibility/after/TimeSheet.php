<?php

namespace SolidPrinciples\after;

class TimeSheet
{
    public function print(): string
    {
        return date("Y-m-d");
    }
}