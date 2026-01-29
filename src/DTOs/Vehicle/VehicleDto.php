<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\DTOs\Vehicle;

use Vigihdev\Shareds\Contracts\Bootstrap\ButtonActionInterface;
use Vigihdev\Shareds\Contracts\Vehicle\VehicleInterface;

final class VehicleDto implements VehicleInterface
{

    /**
     *
     * @param string $namaMobil
     * @param string $imageUrl
     * @param int $harga
     * @param string $paketSewa
     * @param string $tipeMobil
     * @param ButtonActionDto|ButtonActionInterface $button
     * @return void
     */
    public function __construct(
        private readonly string $namaMobil,
        private readonly string $imageUrl,
        private readonly int $harga,
        private readonly string $paketSewa,
        private readonly string $tipeMobil,
        private readonly ButtonActionInterface $button
    ) {
        // Validasi basic
        if ($harga < 0) {
            throw new \InvalidArgumentException('Harga tidak boleh negatif');
        }
    }

    /**
     *
     * @return ButtonActionDto
     */
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

    public function getHarga(): int
    {
        return $this->harga;
    }

    public function getPaketSewa(): string
    {
        return $this->paketSewa;
    }

    public function getTipeMobil(): string
    {
        return $this->tipeMobil;
    }

    public function getHargaFormatted(): string
    {
        return 'Rp ' . number_format($this->harga, 0, ',', '.');
    }
}
