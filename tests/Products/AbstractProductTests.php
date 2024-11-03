<?php

namespace GildedRose\Products;

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
        $product->modifySellIn();

        $this->assertEquals(9, $product->getSellIn());
    }

    public function testModifyQualityNormally(): void
    {
        $product = $this->createProduct("Test Product", 10, 20);

        $product->modifyQuality(2);
        $this->assertEquals(22, $product->getQuality());

        $product->modifyQuality(-4);
        $this->assertEquals(18, $product->getQuality());
    }

    public function testQualityMaxAndMin(): void
    {
        $product = $this->createProduct("Test Product", 10, 20);

        $product->modifyQuality(100);
        $this->assertEquals(50, $product->getQuality());

        $product->modifyQuality(-100);
        $this->assertEquals(0, $product->getQuality());
    }
}
