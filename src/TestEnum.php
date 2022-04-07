<?php

declare(strict_types=1);

namespace PhpEnumPhpStanTest;

use Mabe\Enum\Cl\EmulatedIntEnum;

require_once __DIR__ . '/MyEnum-emulated.php';

/** @extends Enum<string> */
class TestEnum extends Enum {
    private const ONE = '1';
    private const TWO = '2';
}
