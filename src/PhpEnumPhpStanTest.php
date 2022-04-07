<?php

declare(strict_types=1);

namespace PhpEnumPhpStanTest;

use MyCLabs\Enum\Enum;

require __DIR__ . '/../vendor/autoload.php';

class PhpEnumPhpStanTest {
    public static function main(): void {
        echo TestEnum::ONE() . "\n";
        echo TestEnum::TWO() . "\n";
    }
}

PhpEnumPhpStanTest::main();
