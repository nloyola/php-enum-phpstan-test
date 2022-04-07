<?php

declare(strict_types=1);

namespace PhpEnumPhpStanTest;

use MyCLabs\Enum\Enum;

require __DIR__ . '/../vendor/autoload.php';

/** @extends Enum<string> */
class TestEnum extends Enum {
    private const ONE = '1';
    private const TWO = '2';
}

class PhpEnumPhpStanTest {
    public static function main(): void {
        echo TestEnum::ONE() . "\n";
        echo TestEnum::TWO() . "\n";
    }
}

PhpEnumPhpStanTest::main();
