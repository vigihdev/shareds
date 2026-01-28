<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Bootstrap;

interface TitleDescriptionInterface
{
    public function getTitle(): string;
    public function getDescription(): string;
}
