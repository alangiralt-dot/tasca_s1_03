<?php
$words = ["PHP", "Java", "Python", "C", "HTML", "Javascript", "Go", "Rust"];
$evenWords = array_filter($words, fn($v) => mb_strlen($v) % 2 === 0);
print_r($evenWords);