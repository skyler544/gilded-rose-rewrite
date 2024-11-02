<?php

namespace GildedRose;

require __DIR__ . '/../vendor/autoload.php';

use GildedRose\GildedRose;

class Main
{
    public static function main(): void
    {
        (new GildedRose())->run();
    }
}

if (php_sapi_name() == "cli" && isset($argv) && basename(__FILE__) == basename($argv[0])) {
    Main::main();
}
