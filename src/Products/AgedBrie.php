<?php

namespace GildedRose\Products;

use GildedRose\Interfaces\QualityUpdatableInterface;

class AgedBrie extends AbstractProduct implements QualityUpdatableInterface
{
    public function updateQuality(): void
    {
        $delta = $this->getSellIn() < 0 ? 2 : 1;
        $this->modifyQuality($delta);
    }
}
