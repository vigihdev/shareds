<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\Contracts\Vehicle;

interface VehicleCompactHargaInterface
{
    public function getHarga(): int;
    public function getPaketSewa(): string;
}
