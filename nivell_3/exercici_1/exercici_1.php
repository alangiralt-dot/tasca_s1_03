<?php
$numbers = [2, 3, 4, 5, 6, 7, 8, 9, 10];
$cubedNumbers = array_map(fn($v) => $v ** 3, $numbers);
print_r($cubedNumbers);
