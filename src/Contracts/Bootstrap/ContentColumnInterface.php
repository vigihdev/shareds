<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\Contracts\Bootstrap;

interface ContentColumnInterface
{

    public function getTitle(): string;

    public function getDescription(): string;
}
