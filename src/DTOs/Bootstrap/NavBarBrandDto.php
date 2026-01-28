<?php

declare(strict_types=1);

namespace Vigihdev\DTOs\Bootstrap;

use Vigihdev\Contracts\Bootstrap\NavBarBrandInterface;

final class NavBarBrandDto implements NavBarBrandInterface
{

    public function __construct(
        protected string $imageUrl,
        protected string $homeUrl,
        protected string $name,
        protected array $options = [],
    ) {}

    public function getHomeUrl(): string
    {
        return $this->homeUrl;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
