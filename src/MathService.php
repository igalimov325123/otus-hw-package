<?php


class MathService
{
    function sum(int $a, int $b): int{
        return $a + $b;
    }

    function pow(int $a, int $b): int{
        return pow($a, $b);
    }
}