<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\DTOs\Bootstrap;

use Vigihdev\Shareds\Contracts\Bootstrap\ContentColumnInterface;

final class ContentColumnDto implements ContentColumnInterface
{

    public function __construct(
        private readonly string $title,
        private readonly string $description,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
