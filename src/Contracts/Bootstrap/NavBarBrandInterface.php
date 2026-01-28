<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Bootstrap;

interface NavBarBrandInterface
{
    public function getImageUrl(): string;
    public function getHomeUrl(): string;
    public function getName(): string;
    public function getOptions(): array;
}
