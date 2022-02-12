<?php

namespace SolidPrinciples\LiskovSubstitution\before;

class Document
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function save()
    {
        return $this->filename . ' saved.';
    }
}