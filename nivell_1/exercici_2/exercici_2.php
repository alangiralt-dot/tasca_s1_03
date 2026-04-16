<?php
$student = [
    "course" => "Full Stack PHP",
    "firstName" => "Liam",
    "lastName" => "Smith",
    "age" => 22,
    "address" => "Flat 12, 45 Saffron Hill, EC1N 8FH",
    "country" => "United Kingdom"
];
echo 'The length of $student is ' . count($student) . PHP_EOL;
unset($student["address"]);
echo 'The length of $student is ' . count($student) . PHP_EOL;
foreach ($student as $key => $value) {
    echo $key . ': ' . $value . PHP_EOL;
}
