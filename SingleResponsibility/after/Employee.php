<?php

namespace SolidPrinciples\after;

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

    public function printTimeSheetReport(TimeSheet $timeSheet): void
    {
        echo $timeSheet->print();
    }
}