<?php

namespace GildedRose\Products;

abstract class AbstractProduct
{
    public function __construct(
        private string $name,
        private int $sellIn,
        private int $quality
    ) {
    }

    public function modifySellIn(int $delta = -1): void
    {
        $this->sellIn += $delta;
    }

    public function modifyQuality(int $delta): void
    {
        $this->quality = max(min($this->quality + $delta, 50), 0);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSellIn(): int
    {
        return $this->sellIn;
    }

    public function getQuality(): int
    {
        return $this->quality;
    }
}
