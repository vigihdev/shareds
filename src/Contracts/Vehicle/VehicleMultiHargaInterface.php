<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\Contracts\Vehicle;

interface VehicleMultiHargaInterface extends VehicleCompactInterface
{

    /**
     * @return VehicleCompactHargaInterface[]|VehicleNotAvailableHargaInterface[]
     */
    public function getPaketHargas(): array;
}
