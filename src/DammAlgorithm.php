<?php


namespace CheckAlgos;

class DammAlgorithm implements CheckAlgoInterface
{
    /** @var int[][]  */
    private static $xy = [
        [0, 3, 1, 7, 5, 9, 8, 6, 4, 2],
        [7, 0, 9, 2, 1, 5, 4, 8, 6, 3],
        [4, 2, 0, 6, 8, 7, 1, 3, 5, 9],
        [1, 7, 5, 0, 9, 8, 3, 4, 2, 6],
        [6, 1, 2, 3, 0, 4, 5, 9, 7, 8],
        [3, 6, 7, 4, 2, 0, 9, 5, 8, 1],
        [5, 8, 6, 9, 7, 2, 0, 1, 3, 4],
        [8, 9, 4, 5, 3, 6, 2, 0, 1, 7],
        [9, 4, 3, 8, 6, 1, 7, 2, 0, 5],
        [2, 5, 8, 1, 4, 3, 6, 7, 9, 0],
    ];
    
    /**
     * @param string $str
     * @return bool
     */
    public static function validate(string $str): bool
    {
        if (!is_numeric($str)) {
            throw new \InvalidArgumentException("argument is not a numeric string");
        }
        $digit = self::calc($str);
        return $digit === 0;
    }
    
    /**
     * @param string $str
     * @return string
     */
    public static function calculate(string $str): string
    {
        if (!is_numeric($str)) {
            throw new \InvalidArgumentException("argument is not a numeric string");
        }
        $digit = self::calc($str);
        return (string)$digit;
    }
    
    private static function calc(string $str): int
    {
        $digit = 0;
        $idx = 0;
        $len = mb_strlen($str);
        while ($idx < $len) {
            /** @var int $digit */
            $digit = self::$xy[$digit][$str[$idx]];
            $idx++;
        }
        return $digit;
    }
}
