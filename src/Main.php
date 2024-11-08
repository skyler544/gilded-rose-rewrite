<?php

namespace GildedRose;

require __DIR__ . '/../vendor/autoload.php';

class Main
{
    public static function main(): void
    {
        (new GildedRose())->run();
    }
}

if (PHP_SAPI === 'cli') {
    Main::main();
}
