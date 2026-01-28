<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\Contracts\Able;

interface JsonableInterface
{
    public function toJson(): string;
}
