<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\Contracts\Bootstrap;

interface ContentColumnCompactInterface extends ContentColumnInterface
{

    public function getButton(): ButtonActionInterface;
}
