<?php

namespace GildedRose\Factories;

use GildedRose\Factories\ProductFactory;
use GildedRose\Products\AgedBrie;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ProductFactoryTest extends TestCase
{
    public function testCreateProductWithInvalidNameThrowsException(): void
    {
        $name = "skjlwnwocwncwe";

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Unknown product type: $name");

        ProductFactory::createProduct($name, 5, 5);
    }

    public function testCreateAgedBrieProduct(): void
    {
        $name = "Aged Brie";
        $sellIn = 10;
        $quality = 20;

        $product = ProductFactory::createProduct($name, $sellIn, $quality);

        $this->assertInstanceOf(AgedBrie::class, $product);
        $this->assertEquals($name, $product->getName());
        $this->assertEquals($sellIn, $product->getSellIn());
        $this->assertEquals($quality, $product->getQuality());
    }
}
