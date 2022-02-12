<?php

namespace SolidPrinciples\DependencyInversion\before;


class BudgetReport
{
    private MySQLDatabase $database;

    public function __construct(MySQLDatabase $database)
    {
        $this->database = $database;
    }

    public function save($data)
    {
        $this->database->insert($data);
    }
}