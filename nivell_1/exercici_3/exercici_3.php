<?php
declare(strict_types=1);
$ictWords = ["server", "network", "device", "kernel", "router"];
function hasCommonChar(array $strings, string $char): bool {
    $uppercaseChar = strtoupper($char);
    foreach ($strings as $s) {
        if (!str_contains(strtoupper($s), $uppercaseChar)) return false;
    }
    return true;
}
var_dump(hasCommonChar($ictWords, 'e'));
