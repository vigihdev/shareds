<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\Contracts\Bootstrap;

interface TitleDescriptionInterface
{
    public function getTitle(): string;
    public function getDescription(): string;
}
