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

function exercise1($number) : int
    {
    return !($number & 1);
    }

$evenNumbers = array_filter($numbers, "exercise1");

$evenNumbersSum = array_sum($evenNumbers);

echo ("1 Uzduotis. Lyginiu skaiciu suma = " . $evenNumbersSum);

/*
 2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas), +0.5 jeigu array funkcijos naudojamos
*/

$numbers2 = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];

function exercise2($number) : int
{
    return array_product ($number);
}

$arrayMultiplication = ($numbers2);

// echo ($arrayMultiplication);