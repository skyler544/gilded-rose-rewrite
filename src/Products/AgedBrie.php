<?php

namespace GildedRose\Products;

use GildedRose\Interfaces\DiscountableInterface;
use GildedRose\Interfaces\QualityUpdatableInterface;
use GildedRose\Interfaces\CurrencyAwareInterface;

class AgedBrie extends AbstractProduct implements
    QualityUpdatableInterface,
    CurrencyAwareInterface,
    DiscountableInterface
{
    public function __construct(
        string $name,
        int $sellIn,
        int $quality,
        private ?string $currency = ''
    ) {
        parent::__construct($name, $sellIn, $quality);
    }

    public function updateQuality(): void
    {
        $this->modifySellIn();
        $delta = $this->getSellIn() < 0 ? 2 : 1;
        $this->modifyQuality($delta);
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }
    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function applyDiscount(int $delta): void
    {
        $this->modifyQuality($delta);
    }
}
