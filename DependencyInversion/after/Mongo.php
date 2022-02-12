<?php

namespace SolidPrinciples\DependencyInversion\after;

class Mongo implements Database
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