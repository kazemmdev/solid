<?php

namespace SolidPrinciples\InterfaceIntegration\before;

class DropBox implements CloudProvider
{
    public function storeFile(string $name)
    {
        return 'file stored';
    }

    public function getFile(string $name)
    {
        return 'this is your file';
    }

    // useless function
    public function createServer(string $region)
    {
        // TODO: Implement createServer() method.
    }

    // useless function
    public function listServer(string $region)
    {
        // TODO: Implement listServer() method.
    }

    // useless function
    public function getCDNAddress()
    {
        // TODO: Implement getCDNAddress() method.
    }
}