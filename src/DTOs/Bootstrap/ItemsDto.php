<?php

declare(strict_types=1);

namespace Vigihdev\DTOs\Bootstrap;

use Vigihdev\Contracts\Bootstrap\ItemsInterface;

final class ItemsDto implements ItemsInterface
{
    public function __construct(
        private readonly array $items
    ) {}

    public function getItems(): array
    {
        return $this->items;
    }
}
