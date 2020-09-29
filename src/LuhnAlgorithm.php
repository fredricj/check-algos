<?php
declare(strict_types=1);

namespace CheckAlgos;

class LuhnAlgorithm implements CheckAlgoInterface
{
    public static function validate(string $str): bool
    {
        $len = mb_strlen($str);
        $parity = $len-1 % 2;
        $sum = self::calc($str, $len, $parity);
        return $sum % 10 === 0;
    }
    
    public static function calculate(string $str): string
    {
        $len = mb_strlen($str);
        $parity = $len % 2;
        $sum = self::calc($str, $len, $parity);
        return (string)(($sum*9) % 10);
    }
    
    private static function calc(string $str, int $len, int $parity): int
    {
        $idx = 0;
        $sum = 0;
        while ($idx < $len) {
            $row = (($idx+$parity)%2+1)*(int)$str[$idx];
            if ($row >= 10) {
                $row -= 9;
            }
            $sum += $row;
            $idx++;
        }
        return $sum;
    }
}
