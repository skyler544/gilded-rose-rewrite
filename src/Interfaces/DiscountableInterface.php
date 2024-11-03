<?php

namespace GildedRose\Interfaces;

interface DiscountableInterface
{
    public function applyDiscount(int $delta): void;
}
