<?php

namespace GildedRose\Factories;

use GildedRose\Products\AbstractProduct;
use GildedRose\Products\AgedBrie;
use InvalidArgumentException;

class ProductFactory
{
    public static function createProduct(
        string $name,
        int $sellIn,
        int $quality
    ): AbstractProduct {
        return match ($name) {
            'Aged Brie' => new AgedBrie($name, $sellIn, $quality),
            // TODO implement more product types
            default => throw new InvalidArgumentException("Unknown product type: $name")
        };
    }
}
