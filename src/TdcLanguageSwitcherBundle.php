<?php

declare(strict_types=1);

namespace Tdc\LanguageSwitcherBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Tdc\LanguageSwitcherBundle\DependencyInjection\TdcContainerExtension;

class TdcLanguageSwitcherBundle extends Bundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new TdcContainerExtension();
    }
}