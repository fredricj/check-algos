<?php


namespace CheckAlgos\Test;

use CheckAlgos\VerhoeffAlgorithm;
use PHPUnit\Framework\TestCase;

class VerhoeffTest extends TestCase
{
    public function testValidate(): void
    {
        self::assertTrue(VerhoeffAlgorithm::validate("758722"));
        self::assertNotTrue(VerhoeffAlgorithm::validate("758721"));
        self::assertTrue(VerhoeffAlgorithm::validate('123451'));
        self::assertNotTrue(VerhoeffAlgorithm::validate('123450'));
        self::assertTrue(VerhoeffAlgorithm::validate('1428570'));
        self::assertNotTrue(VerhoeffAlgorithm::validate('1428571'));
        self::assertTrue(VerhoeffAlgorithm::validate('1234567890120'));
        self::assertNotTrue(VerhoeffAlgorithm::validate('1234567890125'));
        self::assertTrue(VerhoeffAlgorithm::validate('84736430954837284567892'));
        self::assertNotTrue(VerhoeffAlgorithm::validate('84736430954837284567893'));
    }
    
    public function testValidateException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        self::assertNotTrue(VerhoeffAlgorithm::validate('8473 '));
    }
    
    public function testCalculate(): void
    {
        self::assertEquals(2, VerhoeffAlgorithm::calculate('75872'));
        self::assertEquals(1, VerhoeffAlgorithm::calculate('12345'));
        self::assertEquals(0, VerhoeffAlgorithm::calculate('142857'));
        self::assertEquals(0, VerhoeffAlgorithm::calculate('123456789012'));
        self::assertEquals(2, VerhoeffAlgorithm::calculate('8473643095483728456789'));
    }

    public function testCalculateException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        /** @noinspection UnusedFunctionResultInspection */
        VerhoeffAlgorithm::calculate('8473 ');
    }
}
