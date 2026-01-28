<?php

declare(strict_types=1);

namespace Vigihdev\Shareds\Contracts\OwlCarousel;

interface OptionsOwlCarouselInterface
{
    public function getItems(): int|float;
    public function getLoop(): bool;
    public function getMargin(): int;
    public function getNav(): bool;
    public function getDots(): bool;
    public function getAutoplay(): bool;
    public function getNavText(): array;

    public function toArray(): array;
    public function toJson(int $options = 0): string;
}
