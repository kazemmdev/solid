<?php

namespace SolidPrinciples\InterfaceIntegration\after;

interface CloudHostingProvider
{
    public function createServer(string $region);
}