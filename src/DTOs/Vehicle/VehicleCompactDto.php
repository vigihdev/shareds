<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\DTOs\Vehicle;

use Vigihdev\Shareds\Contracts\Bootstrap\ButtonActionInterface;
use Vigihdev\Shareds\Contracts\Vehicle\VehicleCompactInterface;
use Vigihdev\Shareds\DTOs\Bootstrap\ButtonActionDto;

final class VehicleCompactDto implements VehicleCompactInterface
{

    /**
     *
     * @param string $namaMobil
     * @param string $imageUrl
     * @param string $tipeMobil
     * @param ButtonActionDto $button
     * @return void
     */
    public function __construct(
        private readonly string $namaMobil,
        private readonly string $imageUrl,
        private readonly string $tipeMobil,
        private readonly ButtonActionInterface $button
    ) {}

    public function getButtonAction(): ButtonActionInterface
    {
        return $this->button;
    }

    public function getNamaMobil(): string
    {
        return $this->namaMobil;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getTipeMobil(): string
    {
        return $this->tipeMobil;
    }
}
