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

    public function testQualityIncreasesNormallyWhenSellInGreaterZero(): void
    {
        $product = $this->createProduct("Aged Brie", 8, 5);

        $product->updateQuality();
        $this->assertEquals(6, $product->getQuality());
        $product->updateQuality();
        $this->assertEquals(7, $product->getQuality());
    }

    public function testQualityIncreasesTwiceAsFastWhenSellInLessThanZero(): void
    {
        $product = $this->createProduct("Aged Brie", 0, 5);

        $product->updateQuality();
        $this->assertEquals(7, $product->getQuality());
        $product->updateQuality();
        $this->assertEquals(9, $product->getQuality());
    }
}
