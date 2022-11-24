<?php

/*
 1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas) +0.5 jeigu array funkcijos naudojamos
*/

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

function exercise1($number)
    {
    return !($number & 1);
    }

$evenNumbers = array_filter($numbers, "exercise1");

$evenNumbersSum = array_sum($evenNumbers);

echo ($evenNumbersSum);
