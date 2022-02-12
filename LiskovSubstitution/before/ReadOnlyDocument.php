<?php

namespace SolidPrinciples\LiskovSubstitution\before;

class ReadOnlyDocument extends Document
{
    public function save()
    {
        throw new Exception("Can't save read-only document.");
    }

}