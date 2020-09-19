<?php


namespace CheckAlgos\Test;

use CheckAlgos\LuhnAlgorithm;
use PHPUnit\Framework\TestCase;

class LuhnAlgorithmTest extends TestCase
{
    public function testValidate(): void
    {
        self::assertTrue(LuhnAlgorithm::validate("9501234400008"));
        self::assertTrue(LuhnAlgorithm::validate("8961019501234400001"));
        self::assertTrue(LuhnAlgorithm::validate("12345678903"));
        self::assertTrue(LuhnAlgorithm::validate("123456789031"));
        self::assertTrue(LuhnAlgorithm::validate("1234567890300"));
        self::assertTrue(LuhnAlgorithm::validate("123456789030000"));
        self::assertTrue(LuhnAlgorithm::validate("1234567890300019"));
        self::assertFalse(LuhnAlgorithm::validate("123456789030001"));
    
        self::assertTrue(LuhnAlgorithm::validate("79927398713"));
        self::assertFalse(LuhnAlgorithm::validate("79927398711"));
        self::assertFalse(LuhnAlgorithm::validate("79927398712"));
        self::assertFalse(LuhnAlgorithm::validate("79927398714"));
        self::assertFalse(LuhnAlgorithm::validate("79927398715"));
        self::assertFalse(LuhnAlgorithm::validate("79927398716"));
        self::assertFalse(LuhnAlgorithm::validate("79927398717"));
        self::assertFalse(LuhnAlgorithm::validate("79927398718"));
        self::assertFalse(LuhnAlgorithm::validate("79927398719"));
        self::assertFalse(LuhnAlgorithm::validate("79927398710"));
    }
    public function testCalculate(): void
    {
        self::assertEquals(3, LuhnAlgorithm::calculate("7992739871"));
        self::assertEquals(1, LuhnAlgorithm::calculate("896101950123440000"));
        self::assertEquals(8, LuhnAlgorithm::calculate("950123440000"));
        self::assertEquals(3, LuhnAlgorithm::calculate("7992739871"));
        self::assertEquals(3, LuhnAlgorithm::calculate("1234567890"));
        self::assertEquals(1, LuhnAlgorithm::calculate("12345678903"));
        self::assertEquals(0, LuhnAlgorithm::calculate("123456789030"));
        self::assertEquals(0, LuhnAlgorithm::calculate("12345678903000"));
        self::assertEquals(9, LuhnAlgorithm::calculate("123456789030001"));
    }
}
