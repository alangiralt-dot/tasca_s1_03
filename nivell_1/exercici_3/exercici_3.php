<?php
declare(strict_types=1);
$ictWords = ["server", "network", "device", "kernel", "router"];
function hasCommonChar(array $words, string $char): bool {
    foreach ($ictWords as $w) {
        if (!str_contains(strtoupper($w), $char)) return false;
    }
    return true;
}
