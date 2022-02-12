<?php

namespace SolidPrinciples\DependencyInversion\after;


class BudgetReport
{
    private Database $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function save($data)
    {
        $this->database->insert($data);
    }
}