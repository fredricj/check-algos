<?php


namespace CheckAlgos\Test;


use CheckAlgos\DammAlgorithm;
use PHPUnit\Framework\TestCase;

class DammAlgorithmTest extends TestCase
{
    public function testValidate(): void
    {
        self::assertTrue(DammAlgorithm::validate("5724"));
        self::assertNotTrue(DammAlgorithm::validate("5727"));
        self::assertTrue(DammAlgorithm::validate("112946"));
    }
    
    public function testCalculate(): void
    {
        self::assertEquals(4, DammAlgorithm::calculate('572'));
        self::assertEquals(6, DammAlgorithm::calculate('11294'));
    }
}