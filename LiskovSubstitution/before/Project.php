<?php

namespace SolidPrinciples\LiskovSubstitution\before;

class Project
{
    private array $documents;

    public function __construct(array $documents)
    {
        $this->documents = $documents;
    }

    public function saveAll()
    {
        foreach ($this->documents as $doc) {
            if (!($doc instanceof ReadOnlyDocument)) {
                $doc->save();
            }
        }
    }

}