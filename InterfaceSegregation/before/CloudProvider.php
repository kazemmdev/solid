<?php

namespace SolidPrinciples\InterfaceIntegration\before;

interface CloudProvider
{
    public function storeFile(string $name);

    public function getFile(string $name);

    public function createServer(string $region);

    public function listServer(string $region);

    public function getCDNAddress();
}