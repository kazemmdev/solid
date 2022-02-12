<?php

namespace SolidPrinciples\InterfaceIntegration\after;

interface CloudStorageProvider
{
    public function storeFile(string $name);

    public function getFile(string $name);

}