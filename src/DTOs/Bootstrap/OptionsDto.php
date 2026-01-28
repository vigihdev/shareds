<?php

declare(strict_types=1);

namespace Vigihdev\DTOs\Bootstrap;

use Vigihdev\Contracts\Bootstrap\OptionsInterface;

final class OptionsDto implements OptionsInterface
{

    public function __construct(
        private readonly array $options
    ) {}

    public function getOptions(): array
    {
        return $this->options;
    }
}
