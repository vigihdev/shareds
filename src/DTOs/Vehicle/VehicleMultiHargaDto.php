<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\DTOs\Vehicle;

use Vigihdev\Shareds\Contracts\Bootstrap\ButtonActionInterface;
use Vigihdev\Shareds\Contracts\Vehicle\VehicleMultiHargaInterface;
use Vigihdev\Shareds\DTOs\Bootstrap\ButtonActionDto;

final class VehicleMultiHargaDto implements VehicleMultiHargaInterface
{

    /**
     *
     * @param string $namaMobil
     * @param string $imageUrl
     * @param string $tipeMobil
     * @param ButtonActionDto|ButtonActionInterface $button
     * @param VehicleCompactHargaDto[]|VehicleNotAvailableHarga[] $paketHargas
     * @return void
     */
    public function __construct(
        private readonly string $namaMobil,
        private readonly string $imageUrl,
        private readonly string $tipeMobil,
        private readonly array $paketHargas,
        private readonly ButtonActionInterface $button

    ) {}

    /**
     *
     * @return ButtonActionDto
     */
    public function getButtonAction(): ButtonActionInterface
    {
        return $this->button;
    }

    public function getPaketHargas(): array
    {
        return $this->paketHargas;
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
