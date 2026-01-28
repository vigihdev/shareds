<?php

declare(strict_types=1);

namespace Vigihdev\DTOs\Bootstrap;

use Vigihdev\Contracts\Bootstrap\ImageMediaInterface;

final class ImageMediaDto implements ImageMediaInterface
{

    public function __construct(
        private readonly string $imageUrl
    ) {}

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}
