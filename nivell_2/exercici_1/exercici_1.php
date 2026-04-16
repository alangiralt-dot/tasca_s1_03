<?php
$guestsList1 = ["Oliver", "Noah", "James", "Sophia", "Emma", "Isabella", "Ethan", "Mia"];
$guestsList2 = ["William", "James", "Sophia", "Lucas", "Noah", "Olivia", "Ethan"];
$commonGuestsList = [];
foreach ($guestsList1 as $g) {
    if (in_array($g, $guestsList2)) array_push($commonGuestsList, $g);
}
echo 'common guests list' . PHP_EOL;
print_r($commonGuestsList);
$exclusiveGuestsList2 = [];
foreach ($guestsList2 as $g) {
    if (!in_array($g, $commonGuestsList)) array_push($exclusiveGuestsList2, $g);
}
echo 'complete guests list' . PHP_EOL;
print_r(array_merge($guestsList1, $exclusiveGuestsList2));
$exclusiveGuestsList1 = [];
foreach ($guestsList1 as $g) {
    if (!in_array($g, $commonGuestsList)) array_push($exclusiveGuestsList1, $g);
}
echo 'exclusive guests list1' . PHP_EOL;
print_r($exclusiveGuestsList1);
echo 'exclusive guests list2' . PHP_EOL;
print_r($exclusiveGuestsList2);