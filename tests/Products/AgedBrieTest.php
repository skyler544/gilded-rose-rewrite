<?php

namespace GildedRose\Products;

use PHPUnit\Framework\TestCase;

class AgedBrieTest extends TestCase
{
    use AbstractProductTests;

    protected function createProduct(
        string $name,
        int $sellIn,
        int $quality
    ): AbstractProduct {
        return new AgedBrie($name, $sellIn, $quality);
    }
}
