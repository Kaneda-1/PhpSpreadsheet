<?php

declare(strict_types=1);

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\Statistical;

class VarPATest extends AllSetupTeardown
{
    #[\PHPUnit\Framework\Attributes\DataProvider('providerVARPA')]
    public function testVARPA(mixed $expectedResult, mixed ...$args): void
    {
        $this->runTestCases('VARPA', $expectedResult, ...$args);
    }

    public static function providerVARPA(): array
    {
        return require 'tests/data/Calculation/Statistical/VARPA.php';
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('providerOdsVARPA')]
    public function testOdsVARPA(mixed $expectedResult, mixed ...$args): void
    {
        $this->setOpenOffice();
        $this->runTestCases('VARPA', $expectedResult, ...$args);
    }

    public static function providerOdsVARPA(): array
    {
        return require 'tests/data/Calculation/Statistical/VARPA_ODS.php';
    }
}
