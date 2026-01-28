<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Bootstrap;


interface OnClickUrlInterface extends OptionsInterface
{
    public function getUrl(): string;
}
