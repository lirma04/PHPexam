<?php

//1. Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)

$numbers = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
    ];

$evens = array_filter($numbers, function ($value) {
    return $value %2 == 0;
});

$even_sum = array_sum($evens);
echo "The even numbers sum is equal to " . $even_sum;

