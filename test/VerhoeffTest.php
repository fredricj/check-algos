<?php


namespace CheckAlgos\Test;

use CheckAlgos\Verhoeff;
use PHPUnit\Framework\TestCase;

class VerhoeffTest extends TestCase
{
    public function testValidate(): void
    {
        self::assertTrue(Verhoeff::validate("758722"));
        self::assertNotTrue(Verhoeff::validate("758721"));
        self::assertTrue(Verhoeff::validate('123451'));
        self::assertNotTrue(Verhoeff::validate('123450'));
        self::assertTrue(Verhoeff::validate('1428570'));
        self::assertNotTrue(Verhoeff::validate('1428571'));
        self::assertTrue(Verhoeff::validate('1234567890120'));
        self::assertNotTrue(Verhoeff::validate('1234567890125'));
        self::assertTrue(Verhoeff::validate('84736430954837284567892'));
        self::assertNotTrue(Verhoeff::validate('84736430954837284567893'));
    }
    
    public function testCalculate(): void
    {
        self::assertEquals(2, Verhoeff::calculate('75872'));
        self::assertEquals(1, Verhoeff::calculate('12345'));
        self::assertEquals(0, Verhoeff::calculate('142857'));
        self::assertEquals(0, Verhoeff::calculate('123456789012'));
        self::assertEquals(2, Verhoeff::calculate('8473643095483728456789'));
    }
}