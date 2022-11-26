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

echo ("1 Uzduotis. Lyginiu skaiciu suma = " . $evenNumbersSum . PHP_EOL);

/*
 2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas), +0.5 jeigu array funkcijos naudojamos
*/

$numbers2 = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];


function exercise2($givenArray) : int
    {
        return array_reduce($givenArray, function ($carry, $array) {
            foreach ($array as $number)
            $carry *= $number;
            return $carry;
            },
            1);
    }
    
$arrayMultiplication = (exercise2($numbers2));

echo ("2 Uzduotis. Masyve esanciu skaiciu sandauga = " . $arrayMultiplication . PHP_EOL);

/*
 3. Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
 Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
 Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (2 balai)
*/

//   Destination "Paris".
//   Titles: "Romantic Paris", "Hidden Paris"
//   Total: 99500
//   ************
//   Destination "New York"

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydney',
        'destination' => 'Sydney',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

function exercise3()
{

}

/*
 4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1 balas)
*/

function exercise4()
{

}
