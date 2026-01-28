<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\Contracts\Bootstrap;


interface OnClickUrlInterface extends OptionsInterface
{
    public function getUrl(): string;
}
