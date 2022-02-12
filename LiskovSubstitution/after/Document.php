<?php

namespace SolidPrinciples\LiskovSubstitution\after;

class Document
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }
}