<?php

namespace SolidPrinciples\SingleResponsibility\before;

class Employee
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function printTimeSheetReport()
    {
        echo date("Y-m-d H:i:s");
    }
}