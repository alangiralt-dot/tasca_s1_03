<?php
declare(strict_types=1);
$integers = [10, 2, 8, 3, 1, 7, 4, 11, 6, 5];
function isPrimeNumber(int $integer): bool {
    for ($divisor = 2; $divisor <= $integer; $divisor++) {
        if ($integer % $divisor === 0) {
            if ($integer === $divisor) return true;
            return false;
        }
    }
    return false;
}
function conditionalSum(int $carry, int $item): int {
    if (isPrimeNumber($item)) $carry += $item;
    return $carry;
}
var_dump(array_reduce($integers, "conditionalSum", 0));