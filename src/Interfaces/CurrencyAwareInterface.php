<?php

namespace GildedRose\Interfaces;

interface CurrencyAwareInterface
{
    public function setCurrency(string $currency): void;
    public function getCurrency(): string;
}
