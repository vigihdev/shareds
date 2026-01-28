<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Bootstrap;

interface NavBarTogglerInterface
{
    public function getContent(): string;
    public function getOptions(): array;
}
