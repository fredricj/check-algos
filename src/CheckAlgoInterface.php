<?php


namespace CheckAlgos;

interface CheckAlgoInterface
{
    public static function validate(string $str): bool;
    public static function calculate(string $str): string;
}
