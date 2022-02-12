<?php

namespace SolidPrinciples\InterfaceIntegration\after;

class DropBox implements CloudStorageProvider
{
    public function storeFile(string $name)
    {
        return 'file stored';
    }

    public function getFile(string $name)
    {
        return 'this is your file';
    }
}