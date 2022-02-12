<?php

namespace SolidPrinciples\InterfaceIntegration\after;

class Amazon implements CloudStorageProvider, CDNProvider, CloudHostingProvider
{
    public function storeFile(string $name)
    {
        return 'file stored';
    }

    public function getFile(string $name)
    {
        return 'this is your file';
    }

    public function createServer(string $region)
    {
        return 'server created';
    }

    public function listServer(string $region)
    {
        return 'this is list of server';
    }

    public function getCDNAddress()
    {
        return 'this is CDN address';
    }
}