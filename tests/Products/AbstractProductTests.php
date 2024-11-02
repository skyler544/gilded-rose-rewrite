<?php

namespace GildedRose\Products;

use PHPUnit\Framework\TestCase;

trait AbstractProductTests
{
    abstract protected function createProduct(
        string $name,
        int $sellIn,
        int $quality
    ): AbstractProduct;

    public function testDecreaseSellIn(): void
    {
        $product = $this->createProduct("Test Product", 10, 20);
        $product->decreaseSellIn();

        $this->assertEquals(9, $product->getSellIn());
    }

    public function testQualityRange(): void
    {
        $product = $this->createProduct("Test Product", 10, 20);

        $product->modifyQuality(100);
        $this->assertEquals(50, $product->getQuality());

        $product->modifyQuality(-100);
        $this->assertEquals(0, $product->getQuality());
    }
}
