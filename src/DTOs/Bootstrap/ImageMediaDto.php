<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\DTOs\Bootstrap;

use Vigihdev\Shareds\Contracts\Bootstrap\ImageMediaInterface;

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
