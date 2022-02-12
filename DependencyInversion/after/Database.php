<?php

namespace SolidPrinciples\DependencyInversion\after;

interface Database
{
    public function insert($data);

    public function update($data);

    public function delete($data);
}