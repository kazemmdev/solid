<?php

namespace SolidPrinciples\LiskovSubstitution\after;

class WritableDocument extends Document
{
    public function save()
    {
        return 'document is saved!';
    }

}