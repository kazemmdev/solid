<?php

namespace SolidPrinciples\DependencyInversion\before;

class MySQLDatabase
{
    public function insert($data)
    {
        return 'data is inserted!';
    }

    public function update($data)
    {
        return 'data is updated!';

    }

    public function delete($data)
    {
        return 'data is deleted!';

    }
}