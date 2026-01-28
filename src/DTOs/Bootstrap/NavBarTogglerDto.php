<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\DTOs\Bootstrap;

use Vigihdev\Shareds\Contracts\Bootstrap\NavBarTogglerInterface;

final class NavBarTogglerDto implements NavBarTogglerInterface
{

    public function __construct(
        protected string $content,
        protected array $options = [],
    ) {}

    public function getContent(): string
    {
        return $this->content;
    }
    public function getOptions(): array
    {
        return $this->options;
    }
}
