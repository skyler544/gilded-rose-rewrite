<?php

namespace GildedRose;

use GildedRose\Products\AgedBrie;
use GildedRose\Factories\ProductFactory;

class GildedRose
{
    public function run(): void
    {
        $this->productFactoryCheck(
            ProductFactory::createProduct('Aged Brie', 5, 5)
        );
    }

    private function productFactoryCheck(AgedBrie $brie): void
    {
        echo $brie->getName();
    }

    // TODO product cart function
    // TODO main application loop
    // TODO basic keyboard interface?
}
