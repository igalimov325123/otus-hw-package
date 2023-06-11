<?php
declare(strict_types=1);

namespace Igalimov\OtusHwPackage;

class MathService
{
    public function sum(int $a, int $b): int{
        return $a + $b;
    }

    public function pow(int $a, int $b): int{
        return pow($a, $b);
    }
}